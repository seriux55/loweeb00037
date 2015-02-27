<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150225130021 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__Booking (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, sortie_id INT NOT NULL, date_reserver DATE NOT NULL, date_confirmer DATE NOT NULL, nombre INT NOT NULL, promo VARCHAR(255) NOT NULL, confirmer VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, creneau VARCHAR(255) NOT NULL, avis VARCHAR(255) NOT NULL, participation VARCHAR(255) NOT NULL, facture VARCHAR(255) NOT NULL, acompte VARCHAR(255) NOT NULL, mandat VARCHAR(255) NOT NULL, virement VARCHAR(255) NOT NULL, cheque VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, ticket_promo VARCHAR(255) NOT NULL, promo_apayer VARCHAR(255) NOT NULL, lieu_formation VARCHAR(255) NOT NULL, mode_choisi VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_F951D58EA76ED395 (user_id), INDEX IDX_F951D58ECC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58EA76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58ECC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bledvoyage__Booking');
    }
}
