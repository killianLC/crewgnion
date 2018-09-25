<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925141450 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, libelle_tournoi VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participer ADD tournois_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F8752534C FOREIGN KEY (tournois_id) REFERENCES tournoi (id)');
        $this->addSql('CREATE INDEX IDX_EDBE16F8752534C ON participer (tournois_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F8752534C');
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('DROP INDEX IDX_EDBE16F8752534C ON participer');
        $this->addSql('ALTER TABLE participer DROP tournois_id');
    }
}
