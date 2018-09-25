<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925130046 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, nom_grade VARCHAR(255) NOT NULL, point_grade INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, latitude_position BIGINT NOT NULL, longitude_position BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position_user (position_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9E0BF817DD842E46 (position_id), INDEX IDX_9E0BF817A76ED395 (user_id), PRIMARY KEY(position_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quete (id INT AUTO_INCREMENT NOT NULL, descriptif_quete VARCHAR(255) NOT NULL, point_gagne INT NOT NULL, prix INT DEFAULT NULL, latitude_quete BIGINT NOT NULL, longitude_quete BIGINT NOT NULL, rayon_activation_quete BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quete_user (quete_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_8EB4950B7A1B721E (quete_id), INDEX IDX_8EB4950BA76ED395 (user_id), PRIMARY KEY(quete_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repondre (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, grade_id INT DEFAULT NULL, repondre_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_8D93D649FE19A1A8 (grade_id), INDEX IDX_8D93D6495D693660 (repondre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE position_user ADD CONSTRAINT FK_9E0BF817DD842E46 FOREIGN KEY (position_id) REFERENCES position (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE position_user ADD CONSTRAINT FK_9E0BF817A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quete_user ADD CONSTRAINT FK_8EB4950B7A1B721E FOREIGN KEY (quete_id) REFERENCES quete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quete_user ADD CONSTRAINT FK_8EB4950BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649FE19A1A8 FOREIGN KEY (grade_id) REFERENCES grade (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495D693660 FOREIGN KEY (repondre_id) REFERENCES repondre (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FE19A1A8');
        $this->addSql('ALTER TABLE position_user DROP FOREIGN KEY FK_9E0BF817DD842E46');
        $this->addSql('ALTER TABLE quete_user DROP FOREIGN KEY FK_8EB4950B7A1B721E');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495D693660');
        $this->addSql('ALTER TABLE position_user DROP FOREIGN KEY FK_9E0BF817A76ED395');
        $this->addSql('ALTER TABLE quete_user DROP FOREIGN KEY FK_8EB4950BA76ED395');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE position_user');
        $this->addSql('DROP TABLE quete');
        $this->addSql('DROP TABLE quete_user');
        $this->addSql('DROP TABLE repondre');
        $this->addSql('DROP TABLE user');
    }
}
