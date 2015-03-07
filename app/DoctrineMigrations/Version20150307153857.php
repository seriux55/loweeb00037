<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150307153857 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__AvisSortie (id INT AUTO_INCREMENT NOT NULL, booking_id INT NOT NULL, avis LONGTEXT NOT NULL, emotion INT NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_A89A043D3301C60 (booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__AvisSortie ADD CONSTRAINT FK_A89A043D3301C60 FOREIGN KEY (booking_id) REFERENCES bledvoyage__Booking (id)');
        $this->addSql('DROP TABLE AvisSortie');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE AvisSortie (id INT AUTO_INCREMENT NOT NULL, booking_id INT NOT NULL, avis LONGTEXT NOT NULL, emotion INT NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_893EB8F63301C60 (booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE AvisSortie ADD CONSTRAINT FK_893EB8F63301C60 FOREIGN KEY (booking_id) REFERENCES bledvoyage__Booking (id)');
        $this->addSql('DROP TABLE bledvoyage__AvisSortie');
    }
}
