<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150304173133 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__User (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, gender INT NOT NULL, firstname VARCHAR(255) NOT NULL, secondename VARCHAR(255) NOT NULL, born INT NOT NULL, phone VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, deposit DATETIME NOT NULL, UNIQUE INDEX UNIQ_9264ADD692FC23A8 (username_canonical), UNIQUE INDEX UNIQ_9264ADD6A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Booking (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, sortie_id INT NOT NULL, date_reserver DATE NOT NULL, date_confirmer DATE NOT NULL, nombre INT NOT NULL, promo VARCHAR(255) NOT NULL, confirmer VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, creneau VARCHAR(255) NOT NULL, avis VARCHAR(255) NOT NULL, participation VARCHAR(255) NOT NULL, facture VARCHAR(255) NOT NULL, acompte VARCHAR(255) NOT NULL, mandat VARCHAR(255) NOT NULL, virement VARCHAR(255) NOT NULL, cheque VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, ticket_promo VARCHAR(255) NOT NULL, promo_apayer VARCHAR(255) NOT NULL, lieu_formation VARCHAR(255) NOT NULL, mode_choisi VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu_rdv VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_F951D58EA76ED395 (user_id), INDEX IDX_F951D58ECC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, afficher VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__CategorieSortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, velo VARCHAR(255) NOT NULL, running VARCHAR(255) NOT NULL, kayak VARCHAR(255) NOT NULL, randonee VARCHAR(255) NOT NULL, roller VARCHAR(255) NOT NULL, plongee VARCHAR(255) NOT NULL, equitation VARCHAR(255) NOT NULL, fitness VARCHAR(255) NOT NULL, tennis VARCHAR(255) NOT NULL, golf VARCHAR(255) NOT NULL, marche VARCHAR(255) NOT NULL, visites VARCHAR(255) NOT NULL, sport_eau VARCHAR(255) NOT NULL, arc VARCHAR(255) NOT NULL, air VARCHAR(255) NOT NULL, sable VARCHAR(255) NOT NULL, quad VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_579921A1CC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__CategorieTicket (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, conditions LONGTEXT NOT NULL, tarif INT NOT NULL, duree INT NOT NULL, nombre_activite INT NOT NULL, economie INT NOT NULL, photo VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Commande (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, paiement_id INT NOT NULL, nombre INT NOT NULL, textPerso VARCHAR(255) NOT NULL, note VARCHAR(511) NOT NULL, confirmer VARCHAR(255) NOT NULL, facture VARCHAR(255) NOT NULL, acompte VARCHAR(255) NOT NULL, date_achat DATETIME NOT NULL, entreprise VARCHAR(255) NOT NULL, adresse VARCHAR(511) NOT NULL, mode_paiement VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu_rdv VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, categorieTicket_id INT NOT NULL, INDEX IDX_598AAB1A76ED395 (user_id), INDEX IDX_598AAB1E4B6C17B (categorieTicket_id), INDEX IDX_598AAB12A4C4478 (paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__DateSortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, statut VARCHAR(255) NOT NULL, annuler VARCHAR(255) NOT NULL, INDEX IDX_65A26DCFCC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Paiement (id INT AUTO_INCREMENT NOT NULL, mode VARCHAR(255) NOT NULL, information LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Sortie (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categorie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, descriptif VARCHAR(255) NOT NULL, conditions VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, tarif INT NOT NULL, maxPersonne INT NOT NULL, date_debut DATETIME NOT NULL, heure_debut VARCHAR(255) NOT NULL, date_fin DATETIME NOT NULL, heure_fin VARCHAR(255) NOT NULL, video VARCHAR(255) NOT NULL, photo1 VARCHAR(255) NOT NULL, photo2 VARCHAR(255) NOT NULL, photo3 VARCHAR(255) NOT NULL, photo4 VARCHAR(255) NOT NULL, valider VARCHAR(255) NOT NULL, charge INT NOT NULL, acces VARCHAR(255) NOT NULL, echeance INT NOT NULL, tarif_echeance INT NOT NULL, commission INT NOT NULL, annuler VARCHAR(255) NOT NULL, tarif_etud INT NOT NULL, promo_client INT NOT NULL, promo_partenaire INT NOT NULL, astuce INT NOT NULL, pub INT NOT NULL, close INT NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_D31F264A76ED395 (user_id), INDEX IDX_D31F264BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58EA76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58ECC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__CategorieSortie ADD CONSTRAINT FK_579921A1CC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB1A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB1E4B6C17B FOREIGN KEY (categorieTicket_id) REFERENCES bledvoyage__CategorieTicket (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB12A4C4478 FOREIGN KEY (paiement_id) REFERENCES bledvoyage__Paiement (id)');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie ADD CONSTRAINT FK_65A26DCFCC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264BCF5E72D FOREIGN KEY (categorie_id) REFERENCES bledvoyage__Categorie (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Booking DROP FOREIGN KEY FK_F951D58EA76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB1A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264BCF5E72D');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB1E4B6C17B');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB12A4C4478');
        $this->addSql('ALTER TABLE bledvoyage__Booking DROP FOREIGN KEY FK_F951D58ECC72D953');
        $this->addSql('ALTER TABLE bledvoyage__CategorieSortie DROP FOREIGN KEY FK_579921A1CC72D953');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie DROP FOREIGN KEY FK_65A26DCFCC72D953');
        $this->addSql('DROP TABLE bledvoyage__User');
        $this->addSql('DROP TABLE bledvoyage__Booking');
        $this->addSql('DROP TABLE bledvoyage__Categorie');
        $this->addSql('DROP TABLE bledvoyage__CategorieSortie');
        $this->addSql('DROP TABLE bledvoyage__CategorieTicket');
        $this->addSql('DROP TABLE bledvoyage__Commande');
        $this->addSql('DROP TABLE bledvoyage__DateSortie');
        $this->addSql('DROP TABLE bledvoyage__Paiement');
        $this->addSql('DROP TABLE bledvoyage__Sortie');
    }
}
