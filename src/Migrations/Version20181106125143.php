<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181106125143 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, question_id INT NOT NULL, libelle_reponse VARCHAR(255) NOT NULL, reponse_bonne TINYINT(1) DEFAULT NULL, INDEX IDX_5FB6DEC71E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC71E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE grade ADD point_min INT NOT NULL, CHANGE photo photo VARCHAR(255) NOT NULL, CHANGE point_grade point_max INT NOT NULL');
        $this->addSql('ALTER TABLE repondre ADD CONSTRAINT FK_F66FAAF4E4084792 FOREIGN KEY (reponses_id) REFERENCES reponse (id)');
        $this->addSql('ALTER TABLE tournoi_question ADD CONSTRAINT FK_14BDCC80F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi_question ADD CONSTRAINT FK_14BDCC801E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649FE19A1A8 FOREIGN KEY (grade_id) REFERENCES grade (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE repondre DROP FOREIGN KEY FK_F66FAAF4E4084792');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE grade ADD point_grade INT NOT NULL, DROP point_max, DROP point_min, CHANGE photo photo LONGBLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi_question DROP FOREIGN KEY FK_14BDCC80F607770A');
        $this->addSql('ALTER TABLE tournoi_question DROP FOREIGN KEY FK_14BDCC801E27F6BF');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FE19A1A8');
    }
}
