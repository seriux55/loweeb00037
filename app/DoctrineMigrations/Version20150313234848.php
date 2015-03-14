<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150313234848 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Operateur (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, commande_id INT DEFAULT NULL, booking_id INT DEFAULT NULL, action VARCHAR(255) NOT NULL COMMENT \'1:note, 2:confirmer, 3:acompte, 4:facturer, 5:avis\', date_time DATETIME NOT NULL, ip VARCHAR(255) NOT NULL, INDEX IDX_36467B3EA76ED395 (user_id), INDEX IDX_36467B3E82EA2E54 (commande_id), INDEX IDX_36467B3E3301C60 (booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Operateur ADD CONSTRAINT FK_36467B3EA76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE Operateur ADD CONSTRAINT FK_36467B3E82EA2E54 FOREIGN KEY (commande_id) REFERENCES bledvoyage__Commande (id)');
        $this->addSql('ALTER TABLE Operateur ADD CONSTRAINT FK_36467B3E3301C60 FOREIGN KEY (booking_id) REFERENCES bledvoyage__Booking (id)');
        $this->addSql('ALTER TABLE bledvoyage__Booking CHANGE date_reserver date_reserver DATE NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Operateur');
    }
}
