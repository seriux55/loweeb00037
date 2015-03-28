<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150326125339 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Sortie CHANGE picture4_id picture4_id INT DEFAULT NULL, CHANGE picture3_id picture3_id INT DEFAULT NULL, CHANGE picture1_id picture1_id INT DEFAULT NULL, CHANGE picture2_id picture2_id INT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Sortie CHANGE picture1_id picture1_id INT NOT NULL, CHANGE picture2_id picture2_id INT NOT NULL, CHANGE picture3_id picture3_id INT NOT NULL, CHANGE picture4_id picture4_id INT NOT NULL');
    }
}
