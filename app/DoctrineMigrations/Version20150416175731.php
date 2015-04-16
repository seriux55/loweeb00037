<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150416175731 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__User (id INT AUTO_INCREMENT NOT NULL, picture_id INT DEFAULT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, gender INT NOT NULL, firstname VARCHAR(255) NOT NULL, secondename VARCHAR(255) NOT NULL, nom_entreprise VARCHAR(255) DEFAULT NULL, adresse_entreprise VARCHAR(511) DEFAULT NULL, born INT NOT NULL, phone VARCHAR(255) NOT NULL, apropos VARCHAR(511) DEFAULT NULL, VIP VARCHAR(255) NOT NULL, nbr_reservation INT DEFAULT NULL, nbr_participation INT DEFAULT NULL, ip VARCHAR(255) NOT NULL, deposit DATETIME NOT NULL, UNIQUE INDEX UNIQ_9264ADD692FC23A8 (username_canonical), UNIQUE INDEX UNIQ_9264ADD6A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_9264ADD6EE45BDBF (picture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__AvisSortie (id INT AUTO_INCREMENT NOT NULL, booking_id INT NOT NULL, avis LONGTEXT NOT NULL, emotion INT NOT NULL COMMENT \'0:content, 1:bof, 3:triste\', ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_A89A043D3301C60 (booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Booking (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, sortie_id INT NOT NULL, date_reserver DATE NOT NULL, date_confirmer DATE NOT NULL, nombre INT NOT NULL, promo VARCHAR(255) DEFAULT NULL, confirmer VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', note VARCHAR(255) NOT NULL, creneau VARCHAR(255) NOT NULL, avis VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui, 2:en attente\', participation VARCHAR(255) NOT NULL, facture VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', acompte VARCHAR(255) NOT NULL, mandat VARCHAR(255) NOT NULL, virement VARCHAR(255) NOT NULL, cheque VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, ticket_promo VARCHAR(255) NOT NULL, promo_apayer VARCHAR(255) NOT NULL, lieu_formation VARCHAR(255) NOT NULL, mode_choisi VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu_rdv VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_F951D58EA76ED395 (user_id), INDEX IDX_F951D58ECC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, afficher VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__CategorieSortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, velo TINYINT(1) NOT NULL, running TINYINT(1) NOT NULL, kayak TINYINT(1) NOT NULL, randonee TINYINT(1) NOT NULL, roller TINYINT(1) NOT NULL, plongee TINYINT(1) NOT NULL, equitation TINYINT(1) NOT NULL, fitness TINYINT(1) NOT NULL, tennis TINYINT(1) NOT NULL, golf TINYINT(1) NOT NULL, marche TINYINT(1) NOT NULL, visites TINYINT(1) NOT NULL, sport_eau TINYINT(1) NOT NULL, arc TINYINT(1) NOT NULL, air TINYINT(1) NOT NULL, sable TINYINT(1) NOT NULL, quad TINYINT(1) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_579921A1CC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__CategorieTicket (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, conditions LONGTEXT NOT NULL, tarif INT NOT NULL, duree INT NOT NULL, nombre_activite INT NOT NULL, economie INT NOT NULL, photo VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Commande (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, paiement_id INT NOT NULL, nombre INT NOT NULL, textPerso VARCHAR(255) NOT NULL, note VARCHAR(511) NOT NULL, confirmer VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', facture VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', acompte VARCHAR(255) NOT NULL, date_achat DATETIME NOT NULL, entreprise VARCHAR(255) NOT NULL, adresse VARCHAR(511) NOT NULL, mode_paiement VARCHAR(255) NOT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, lieu_rdv VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, categorieTicket_id INT NOT NULL, INDEX IDX_598AAB1A76ED395 (user_id), INDEX IDX_598AAB1E4B6C17B (categorieTicket_id), INDEX IDX_598AAB12A4C4478 (paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Contact (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, date_time DATETIME NOT NULL, ip VARCHAR(255) NOT NULL, INDEX IDX_553FDE68A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__DateSortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, statut VARCHAR(255) NOT NULL, annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', INDEX IDX_65A26DCFCC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Invitation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, sortie_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, entreprise VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, nombre INT NOT NULL, pourcentage INT NOT NULL, dateSortie DATE NOT NULL, textPerso VARCHAR(511) NOT NULL, code VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, close VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_9FE4DEB9A76ED395 (user_id), INDEX IDX_9FE4DEB9CC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Operateur (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, commande_id INT DEFAULT NULL, booking_id INT DEFAULT NULL, action VARCHAR(255) NOT NULL COMMENT \'1:note, 2:confirmer, 3:acompte, 4:facturer, 5:avis\', date_time DATETIME NOT NULL, ip VARCHAR(255) NOT NULL, INDEX IDX_260E050AA76ED395 (user_id), INDEX IDX_260E050A82EA2E54 (commande_id), INDEX IDX_260E050A3301C60 (booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Paiement (id INT AUTO_INCREMENT NOT NULL, mode VARCHAR(255) NOT NULL, information LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Picture (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Sortie (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categorie_id INT DEFAULT NULL, picture1_id INT DEFAULT NULL, picture2_id INT DEFAULT NULL, picture3_id INT DEFAULT NULL, picture4_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(128) NOT NULL, descriptif VARCHAR(255) NOT NULL, conditions VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, tarif INT NOT NULL, maxPersonne INT NOT NULL, date_debut DATETIME NOT NULL, heure_debut VARCHAR(255) NOT NULL, date_fin DATETIME NOT NULL, heure_fin VARCHAR(255) NOT NULL, plan_acces VARCHAR(1023) DEFAULT NULL, video VARCHAR(255) DEFAULT NULL, photo1 VARCHAR(255) DEFAULT NULL, photo2 VARCHAR(255) DEFAULT NULL, photo3 VARCHAR(255) DEFAULT NULL, photo4 VARCHAR(255) DEFAULT NULL, valider VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', charge INT DEFAULT NULL, acces VARCHAR(255) DEFAULT NULL, echeance INT DEFAULT NULL, tarif_echeance INT DEFAULT NULL, commission INT DEFAULT NULL, annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', tarif_etud INT DEFAULT NULL, promo_client INT DEFAULT NULL, promo_partenaire INT DEFAULT NULL, astuce INT NOT NULL COMMENT \'0:non, 1:oui\', pub INT NOT NULL COMMENT \'0:non, 1:oui\', close INT NOT NULL COMMENT \'0:non, 1:oui\', ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_D31F264A76ED395 (user_id), INDEX IDX_D31F264BCF5E72D (categorie_id), UNIQUE INDEX UNIQ_D31F2648D5CC633 (picture1_id), UNIQUE INDEX UNIQ_D31F2649FE969DD (picture2_id), UNIQUE INDEX UNIQ_D31F26427550EB8 (picture3_id), UNIQUE INDEX UNIQ_D31F264BA823601 (picture4_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Ticket (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, code VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, used INT NOT NULL, close VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', date_time DATETIME NOT NULL, ip VARCHAR(255) NOT NULL, INDEX IDX_A6AE8C3582EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__User ADD CONSTRAINT FK_9264ADD6EE45BDBF FOREIGN KEY (picture_id) REFERENCES bledvoyage__Picture (id)');
        $this->addSql('ALTER TABLE bledvoyage__AvisSortie ADD CONSTRAINT FK_A89A043D3301C60 FOREIGN KEY (booking_id) REFERENCES bledvoyage__Booking (id)');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58EA76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Booking ADD CONSTRAINT FK_F951D58ECC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__CategorieSortie ADD CONSTRAINT FK_579921A1CC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB1A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB1E4B6C17B FOREIGN KEY (categorieTicket_id) REFERENCES bledvoyage__CategorieTicket (id)');
        $this->addSql('ALTER TABLE bledvoyage__Commande ADD CONSTRAINT FK_598AAB12A4C4478 FOREIGN KEY (paiement_id) REFERENCES bledvoyage__Paiement (id)');
        $this->addSql('ALTER TABLE bledvoyage__Contact ADD CONSTRAINT FK_553FDE68A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie ADD CONSTRAINT FK_65A26DCFCC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Invitation ADD CONSTRAINT FK_9FE4DEB9A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Invitation ADD CONSTRAINT FK_9FE4DEB9CC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Operateur ADD CONSTRAINT FK_260E050AA76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Operateur ADD CONSTRAINT FK_260E050A82EA2E54 FOREIGN KEY (commande_id) REFERENCES bledvoyage__Commande (id)');
        $this->addSql('ALTER TABLE bledvoyage__Operateur ADD CONSTRAINT FK_260E050A3301C60 FOREIGN KEY (booking_id) REFERENCES bledvoyage__Booking (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264BCF5E72D FOREIGN KEY (categorie_id) REFERENCES bledvoyage__Categorie (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F2648D5CC633 FOREIGN KEY (picture1_id) REFERENCES bledvoyage__Picture (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F2649FE969DD FOREIGN KEY (picture2_id) REFERENCES bledvoyage__Picture (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F26427550EB8 FOREIGN KEY (picture3_id) REFERENCES bledvoyage__Picture (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264BA823601 FOREIGN KEY (picture4_id) REFERENCES bledvoyage__Picture (id)');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C3582EA2E54 FOREIGN KEY (commande_id) REFERENCES bledvoyage__Commande (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Booking DROP FOREIGN KEY FK_F951D58EA76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB1A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Contact DROP FOREIGN KEY FK_553FDE68A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Invitation DROP FOREIGN KEY FK_9FE4DEB9A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Operateur DROP FOREIGN KEY FK_260E050AA76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__AvisSortie DROP FOREIGN KEY FK_A89A043D3301C60');
        $this->addSql('ALTER TABLE bledvoyage__Operateur DROP FOREIGN KEY FK_260E050A3301C60');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264BCF5E72D');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB1E4B6C17B');
        $this->addSql('ALTER TABLE bledvoyage__Operateur DROP FOREIGN KEY FK_260E050A82EA2E54');
        $this->addSql('ALTER TABLE bledvoyage__Ticket DROP FOREIGN KEY FK_A6AE8C3582EA2E54');
        $this->addSql('ALTER TABLE bledvoyage__Commande DROP FOREIGN KEY FK_598AAB12A4C4478');
        $this->addSql('ALTER TABLE bledvoyage__User DROP FOREIGN KEY FK_9264ADD6EE45BDBF');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F2648D5CC633');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F2649FE969DD');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F26427550EB8');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264BA823601');
        $this->addSql('ALTER TABLE bledvoyage__Booking DROP FOREIGN KEY FK_F951D58ECC72D953');
        $this->addSql('ALTER TABLE bledvoyage__CategorieSortie DROP FOREIGN KEY FK_579921A1CC72D953');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie DROP FOREIGN KEY FK_65A26DCFCC72D953');
        $this->addSql('ALTER TABLE bledvoyage__Invitation DROP FOREIGN KEY FK_9FE4DEB9CC72D953');
        $this->addSql('DROP TABLE bledvoyage__User');
        $this->addSql('DROP TABLE bledvoyage__AvisSortie');
        $this->addSql('DROP TABLE bledvoyage__Booking');
        $this->addSql('DROP TABLE bledvoyage__Categorie');
        $this->addSql('DROP TABLE bledvoyage__CategorieSortie');
        $this->addSql('DROP TABLE bledvoyage__CategorieTicket');
        $this->addSql('DROP TABLE bledvoyage__Commande');
        $this->addSql('DROP TABLE bledvoyage__Contact');
        $this->addSql('DROP TABLE bledvoyage__DateSortie');
        $this->addSql('DROP TABLE bledvoyage__Invitation');
        $this->addSql('DROP TABLE bledvoyage__Operateur');
        $this->addSql('DROP TABLE bledvoyage__Paiement');
        $this->addSql('DROP TABLE bledvoyage__Picture');
        $this->addSql('DROP TABLE bledvoyage__Sortie');
        $this->addSql('DROP TABLE bledvoyage__Ticket');
    }
}
