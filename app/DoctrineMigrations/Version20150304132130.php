<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150304132130 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__CategorieTicket (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, conditions LONGTEXT NOT NULL, tarif INT NOT NULL, duree INT NOT NULL, nombre_activite INT NOT NULL, economie INT NOT NULL, photo VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Commande (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, paiement_id INT NOT NULL, nombre INT NOT NULL, textPerso VARCHAR(255) NOT NULL, note VARCHAR(511) NOT NULL, confirmer VARCHAR(255) NOT NULL, facture VARCHAR(255) NOT NULL, acompte VARCHAR(255) NOT NULL, date_achat DATETIME NOT NULL, entreprise VARCHAR(255) NOT NULL, adresse VARCHAR(511) NOT NULL, mode_paiement VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu_rdv VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_598AAB1A76ED395 (user_id), INDEX IDX_598AAB12A4C4478 (paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Paiement (id INT AUTO_INCREMENT NOT NULL, mode VARCHAR(255) NOT NULL, information LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB1A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB12A4C4478 FOREIGN KEY (paiement_id) REFERENCES bledvoyage__Paiement (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB12A4C4478');
        $this->addSql('DROP TABLE bledvoyage__CategorieTicket');
        $this->addSql('DROP TABLE bledvoyage__Commande');
        $this->addSql('DROP TABLE bledvoyage__Paiement');
    }
}
