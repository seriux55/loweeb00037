<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150220233950 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__CategorieSortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, velo VARCHAR(255) NOT NULL, running VARCHAR(255) NOT NULL, kayak VARCHAR(255) NOT NULL, randonee VARCHAR(255) NOT NULL, roller VARCHAR(255) NOT NULL, plongee VARCHAR(255) NOT NULL, equitation VARCHAR(255) NOT NULL, fitness VARCHAR(255) NOT NULL, tennis VARCHAR(255) NOT NULL, golf VARCHAR(255) NOT NULL, marche VARCHAR(255) NOT NULL, visites VARCHAR(255) NOT NULL, sport_eau VARCHAR(255) NOT NULL, arc VARCHAR(255) NOT NULL, air VARCHAR(255) NOT NULL, sable VARCHAR(255) NOT NULL, quad VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_579921A1CC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__CategorieSortie ADD CONSTRAINT FK_579921A1CC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('DROP TABLE bledvoyage__Categorie_sortie');
        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP categorieSortie_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__Categorie_sortie (id INT AUTO_INCREMENT NOT NULL, sortie_id INT NOT NULL, velo VARCHAR(255) NOT NULL, running VARCHAR(255) NOT NULL, kayak VARCHAR(255) NOT NULL, randonee VARCHAR(255) NOT NULL, roller VARCHAR(255) NOT NULL, plongee VARCHAR(255) NOT NULL, equitation VARCHAR(255) NOT NULL, fitness VARCHAR(255) NOT NULL, tennis VARCHAR(255) NOT NULL, golf VARCHAR(255) NOT NULL, marche VARCHAR(255) NOT NULL, visites VARCHAR(255) NOT NULL, sport_eau VARCHAR(255) NOT NULL, arc VARCHAR(255) NOT NULL, air VARCHAR(255) NOT NULL, sable VARCHAR(255) NOT NULL, quad VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_F8B8AB51CC72D953 (sortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Categorie_sortie ADD CONSTRAINT FK_F8B8AB51CC72D953 FOREIGN KEY (sortie_id) REFERENCES bledvoyage__Sortie (id)');
        $this->addSql('DROP TABLE bledvoyage__CategorieSortie');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD categorieSortie_id INT NOT NULL');
    }
}
