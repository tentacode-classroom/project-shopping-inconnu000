<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181008133057 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fidget (id INT AUTO_INCREMENT NOT NULL, shape_id INT NOT NULL, name VARCHAR(50) NOT NULL, side INT NOT NULL, color VARCHAR(25) NOT NULL, price DOUBLE PRECISION NOT NULL, description VARCHAR(255) DEFAULT NULL, pic VARCHAR(255) NOT NULL, view_counter INT NOT NULL, INDEX IDX_4D73CFEE50266CBB (shape_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shape (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fidget ADD CONSTRAINT FK_4D73CFEE50266CBB FOREIGN KEY (shape_id) REFERENCES shape (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fidget DROP FOREIGN KEY FK_4D73CFEE50266CBB');
        $this->addSql('DROP TABLE fidget');
        $this->addSql('DROP TABLE shape');
    }
}
