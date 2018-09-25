<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925131024 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, libelle_reponse VARCHAR(255) NOT NULL, reponse_bonne TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE repondre ADD reponses_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE repondre ADD CONSTRAINT FK_F66FAAF4E4084792 FOREIGN KEY (reponses_id) REFERENCES reponse (id)');
        $this->addSql('CREATE INDEX IDX_F66FAAF4E4084792 ON repondre (reponses_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE repondre DROP FOREIGN KEY FK_F66FAAF4E4084792');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP INDEX IDX_F66FAAF4E4084792 ON repondre');
        $this->addSql('ALTER TABLE repondre DROP reponses_id');
    }
}
