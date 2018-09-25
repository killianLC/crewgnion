<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925144054 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE repondre_tournoi ADD reponse_question_tournois_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE repondre_tournoi ADD CONSTRAINT FK_CACBB64014F42CB FOREIGN KEY (reponse_question_tournois_id) REFERENCES reponse_question_tournoi (id)');
        $this->addSql('CREATE INDEX IDX_CACBB64014F42CB ON repondre_tournoi (reponse_question_tournois_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE repondre_tournoi DROP FOREIGN KEY FK_CACBB64014F42CB');
        $this->addSql('DROP INDEX IDX_CACBB64014F42CB ON repondre_tournoi');
        $this->addSql('ALTER TABLE repondre_tournoi DROP reponse_question_tournois_id');
    }
}
