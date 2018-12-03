<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181201100526 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE accomplir (id INT AUTO_INCREMENT NOT NULL, positions_id INT DEFAULT NULL, users_id INT DEFAULT NULL, date DATE DEFAULT NULL, INDEX IDX_F1ED2C3C7813DDAE (positions_id), INDEX IDX_F1ED2C3C67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, nom_grade VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, point_max INT NOT NULL, point_min INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participer (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, tournois_id INT DEFAULT NULL, point_tournoi INT DEFAULT NULL, INDEX IDX_EDBE16F867B3B43D (users_id), INDEX IDX_EDBE16F8752534C (tournois_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, questionnaires_id INT NOT NULL, position_id INT DEFAULT NULL, libelle_question VARCHAR(255) NOT NULL, experience BIGINT DEFAULT NULL, point_gagne BIGINT DEFAULT NULL, is_tournoi TINYINT(1) NOT NULL, INDEX IDX_B6F7494ECABD5540 (questionnaires_id), INDEX IDX_B6F7494EDD842E46 (position_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questionnaire (id INT AUTO_INCREMENT NOT NULL, libelle_questionnaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE questionnaire_user (questionnaire_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_D90B99E0CE07E8FF (questionnaire_id), INDEX IDX_D90B99E0A76ED395 (user_id), PRIMARY KEY(questionnaire_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quete (id INT AUTO_INCREMENT NOT NULL, descriptif VARCHAR(255) NOT NULL, xp INT NOT NULL, prix INT NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repondre (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, reponses_id INT DEFAULT NULL, INDEX IDX_F66FAAF467B3B43D (users_id), INDEX IDX_F66FAAF4E4084792 (reponses_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, question_id INT NOT NULL, libelle_reponse VARCHAR(255) NOT NULL, reponse_bonne TINYINT(1) DEFAULT NULL, INDEX IDX_5FB6DEC71E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resoudre (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, quete_id INT DEFAULT NULL, date DATE NOT NULL, INDEX IDX_F7E308C4A76ED395 (user_id), INDEX IDX_F7E308C47A1B721E (quete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, libelle_tournoi VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi_question (tournoi_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_14BDCC80F607770A (tournoi_id), INDEX IDX_14BDCC801E27F6BF (question_id), PRIMARY KEY(tournoi_id, question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, grade_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, xp BIGINT DEFAULT NULL, coin BIGINT DEFAULT NULL, INDEX IDX_8D93D649FE19A1A8 (grade_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accomplir ADD CONSTRAINT FK_F1ED2C3C7813DDAE FOREIGN KEY (positions_id) REFERENCES position (id)');
        $this->addSql('ALTER TABLE accomplir ADD CONSTRAINT FK_F1ED2C3C67B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F867B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F8752534C FOREIGN KEY (tournois_id) REFERENCES tournoi (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494ECABD5540 FOREIGN KEY (questionnaires_id) REFERENCES questionnaire (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EDD842E46 FOREIGN KEY (position_id) REFERENCES position (id)');
        $this->addSql('ALTER TABLE questionnaire_user ADD CONSTRAINT FK_D90B99E0CE07E8FF FOREIGN KEY (questionnaire_id) REFERENCES questionnaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE questionnaire_user ADD CONSTRAINT FK_D90B99E0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repondre ADD CONSTRAINT FK_F66FAAF467B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repondre ADD CONSTRAINT FK_F66FAAF4E4084792 FOREIGN KEY (reponses_id) REFERENCES reponse (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC71E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE resoudre ADD CONSTRAINT FK_F7E308C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE resoudre ADD CONSTRAINT FK_F7E308C47A1B721E FOREIGN KEY (quete_id) REFERENCES quete (id)');
        $this->addSql('ALTER TABLE tournoi_question ADD CONSTRAINT FK_14BDCC80F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournoi_question ADD CONSTRAINT FK_14BDCC801E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649FE19A1A8 FOREIGN KEY (grade_id) REFERENCES grade (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FE19A1A8');
        $this->addSql('ALTER TABLE accomplir DROP FOREIGN KEY FK_F1ED2C3C7813DDAE');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EDD842E46');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC71E27F6BF');
        $this->addSql('ALTER TABLE tournoi_question DROP FOREIGN KEY FK_14BDCC801E27F6BF');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494ECABD5540');
        $this->addSql('ALTER TABLE questionnaire_user DROP FOREIGN KEY FK_D90B99E0CE07E8FF');
        $this->addSql('ALTER TABLE resoudre DROP FOREIGN KEY FK_F7E308C47A1B721E');
        $this->addSql('ALTER TABLE repondre DROP FOREIGN KEY FK_F66FAAF4E4084792');
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F8752534C');
        $this->addSql('ALTER TABLE tournoi_question DROP FOREIGN KEY FK_14BDCC80F607770A');
        $this->addSql('ALTER TABLE accomplir DROP FOREIGN KEY FK_F1ED2C3C67B3B43D');
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F867B3B43D');
        $this->addSql('ALTER TABLE questionnaire_user DROP FOREIGN KEY FK_D90B99E0A76ED395');
        $this->addSql('ALTER TABLE repondre DROP FOREIGN KEY FK_F66FAAF467B3B43D');
        $this->addSql('ALTER TABLE resoudre DROP FOREIGN KEY FK_F7E308C4A76ED395');
        $this->addSql('DROP TABLE accomplir');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE participer');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE questionnaire');
        $this->addSql('DROP TABLE questionnaire_user');
        $this->addSql('DROP TABLE quete');
        $this->addSql('DROP TABLE repondre');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE resoudre');
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('DROP TABLE tournoi_question');
        $this->addSql('DROP TABLE user');
    }
}
