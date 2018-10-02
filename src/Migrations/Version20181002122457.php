<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181002122457 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE position_user DROP FOREIGN KEY FK_9E0BF817DD842E46');
        $this->addSql('ALTER TABLE question_app DROP FOREIGN KEY FK_F97A91B77813DDAE');
        $this->addSql('ALTER TABLE repondre_tournoi DROP FOREIGN KEY FK_CACBB64014F42CB');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE position_user');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_app');
        $this->addSql('DROP TABLE question_tournoi');
        $this->addSql('DROP TABLE repondre_tournoi');
        $this->addSql('DROP TABLE reponse_question_tournoi');
        $this->addSql('DROP TABLE tournoi_mobil');
        $this->addSql('DROP TABLE tournoi_pc');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, latitude_position BIGINT NOT NULL, longitude_position BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position_user (position_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9E0BF817DD842E46 (position_id), INDEX IDX_9E0BF817A76ED395 (user_id), PRIMARY KEY(position_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, questionnaires_id INT DEFAULT NULL, libelle_question VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_B6F7494ECABD5540 (questionnaires_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_app (id INT AUTO_INCREMENT NOT NULL, positions_id INT DEFAULT NULL, experience INT NOT NULL, point_gagne INT NOT NULL, INDEX IDX_F97A91B77813DDAE (positions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_tournoi (id INT AUTO_INCREMENT NOT NULL, point_tournoi INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repondre_tournoi (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, reponse_question_tournois_id INT DEFAULT NULL, INDEX IDX_CACBB64067B3B43D (users_id), INDEX IDX_CACBB64014F42CB (reponse_question_tournois_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse_question_tournoi (id INT AUTO_INCREMENT NOT NULL, libelle_reponse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, bonne_reponse_tournoi TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_mobil (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_pc (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE position_user ADD CONSTRAINT FK_9E0BF817A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE position_user ADD CONSTRAINT FK_9E0BF817DD842E46 FOREIGN KEY (position_id) REFERENCES position (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494ECABD5540 FOREIGN KEY (questionnaires_id) REFERENCES questionnaire (id)');
        $this->addSql('ALTER TABLE question_app ADD CONSTRAINT FK_F97A91B77813DDAE FOREIGN KEY (positions_id) REFERENCES position (id)');
        $this->addSql('ALTER TABLE repondre_tournoi ADD CONSTRAINT FK_CACBB64014F42CB FOREIGN KEY (reponse_question_tournois_id) REFERENCES reponse_question_tournoi (id)');
        $this->addSql('ALTER TABLE repondre_tournoi ADD CONSTRAINT FK_CACBB64067B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
    }
}
