<?php

namespace Database\Fake;

use Faker\Generator;

class Person
{
    private array $lastnames = [
        "Mbuyi", "Nkongolo", "Kabamba", "Ngoyi", "Mugisha", "Kabasele", "Masengo", "Lukusa", "Mpoyi", "Mutanda",
        "Kabange", "Mabiala", "Kasongo", "Mukendi", "Lunda", "Mpoyo", "Bongongo", "Ilunga", "Kabedi", "KAlunga",
        "Kalenga", "Mumba", "Mutombo", "Kibonge", "Kahumbu", "Lubutu", "Mwando", "Makiese", "Kamanday", "Avul",
        "Kinzunga", "Maluwa", "Kazadi", "Mulumba", "Kashala", "Ngalula", "Mpinga", "Katende", "Kawali", "Kawaya",
        'Kasongo', 'Mbayo', 'Manang', 'Kafutshi', 'Bigomokero', 'Tubongye', 'Kasinde', 'Mulombole', 'Mputu', 'Mabi',
        'Yuma', 'Nkulu', 'Ngombe', 'Wabubindja', 'Ampire', 'Makashyeni', 'Mutombo', 'Kabongo', 'Ndelela', 'Kadima',
        'Kanam', 'Fatuma', 'Mukoj', 'Kadiat', 'Matshik', 'Fam', 'Mwang', 'Mureng', ' Kazang', 'Muteb',
        'Mwange', 'Bahindwa', 'Kung', 'Alew', 'Ngela', 'Ngeleka', 'Nshidi', 'Mushid', 'Mujing', 'Mujinga',
        'kon', 'Mukeng', 'Mukenga', 'Mazang', 'Botoko', 'Bosemwa', 'Yombo', 'Muteb', 'Muteba', 'Lusinga',
        'Mayani', 'Mayaola', 'Abakuk', 'Mwikew', 'King', 'Tshong', 'Okito', 'Katumbi', 'Mwanke', 'Kitumbi',
        'Kape', 'Kitungwa', 'Mudekereza', 'Kisimba', 'Kalubi', 'Biganiro', 'Katoherio', 'Kambale', 'Paluku',
        'Nzanzu', 'Muhongya', 'Kavira', 'Masika', 'Syahuswa', 'Lukogho', 'Maliro', 'Kavunga', 'Mulonda',
        'Musonda', 'Mwila', 'Mwepu', 'Kabila', 'Kitenge', 'kapend', 'Mutash', 'Mbolela', 'Kasiy', 'Mafuta',
        'Nkosi', 'Tshimbumb', 'Lumpung', 'Yav', 'Ngoie', 'Bakenda', 'Kayombo', 'Biyombo', 'Hassan', 'Tshimpela',
        'Mukuna', 'Kafuta', 'Ngoy', 'Badye', 'Busangu', 'Tshibangu', 'Mwika', 'Lwamba', 'Mwelwa', 'Mutonkole',
        'Bonioma', 'Lofaka', 'Amundala', 'Kabambi', 'Ilunga', 'Kabange', 'Kalonga', 'Kabengele', 'Murhunzi', 'Cirezi',
        'Cirimwami', 'Useni', 'Lenge', 'Kazembe', 'Meki', 'Kabamba', 'Mukalay', 'Avul', 'Kayoa', 'Kayumba', 'Yumba',
        'Kisebwe', 'Mpiana', 'Baondele', 'Bondele', 'Boseko', 'Bosela', 'Isaula', 'Angaoto', 'Kabulu', 'Fwamba'
    ];
    private array $firstnames = [
        'Adrien', 'Aimé', 'Alain', 'Alexandre', 'Alfred', 'Alphonse', 'André', 'Antoine', 'Arthur', 'Auguste', 'Augustin',
        'Benjamin', 'Benoît', 'Bernard', 'Bertrand', 'Charles', 'Christophe', 'Daniel', 'David', 'Denis', 'Édouard', 'Émile',
        'Emmanuel', 'Éric', 'Étienne', 'Eugène', 'François', 'Franck', 'Frédéric', 'Gabriel', 'Georges', 'Gérard', 'Gilbert',
        'Gilles', 'Grégoire', 'Guillaume', 'Guy', 'William', 'Henri', 'Honoré', 'Hugues', 'Isaac', 'Jacques', 'Jean', 'Jérôme',
        'Joseph', 'Jules', 'Julien', 'Laurent', 'Léon', 'Louis', 'Luc', 'Lucas', 'Marc', 'Marcel', 'Martin', 'Matthieu',
        'Maurice', 'Michel', 'Nicolas', 'Noël', 'Olivier', 'Patrick', 'Paul', 'Philippe', 'Pierre', 'Raymond', 'Rémy', 'René',
        'Richard', 'Robert', 'Roger', 'Roland', 'Sébastien', 'Stéphane', 'Théodore', 'Théophile', 'Thibaut', 'Thibault', 'Thierry',
        'Thomas', 'Timothée', 'Tristan', 'Victor', 'Vincent', 'Xavier', 'Yves', 'Zacharie', 'Claude', 'Dominique',
        'Adélaïde', 'Adèle', 'Adrienne', 'Agathe', 'Agnès', 'Aimée', 'Alexandrie', 'Alix', 'Alexandria', 'Alex', 'Alice',
        'Amélie', 'Anaïs', 'Anastasie', 'Andrée', 'Anne', 'Anouk', 'Antoinette', 'Arnaude', 'Astrid', 'Audrey', 'Aurélie',
        'Aurore', 'Bernadette', 'Brigitte', 'Capucine', 'Caroline', 'Catherine', 'Cécile', 'Céline', 'Célina', 'Chantal',
        'Charlotte', 'Christelle', 'Christiane', 'Christine', 'Claire', 'Claudine', 'Clémence', 'Colette', 'Constance',
        'Corinne', 'Danielle', 'Denise', 'Diane', 'Dorothée', 'Édith', 'Éléonore', 'Élisabeth', 'Élise', 'Élodie', 'Émilie',
        'Emmanuelle', 'Françoise', 'Frédérique', 'Gabrielle', 'Geneviève', 'Hélène', 'Henriette', 'Hortense', 'Inès', 'Isabelle',
        'Jacqueline', 'Jeanne', 'Jeannine', 'Joséphine', 'Josette', 'Julie', 'Juliette', 'Laetitia', 'Laure', 'Laurence',
        'Lorraine', 'Louise', 'Luce', 'Lucie', 'Lucy', 'Madeleine', 'Manon', 'Marcelle', 'Margaux', 'Margaud', 'Margot',
        'Marguerite', 'Margot', 'Margaret', 'Maggie', 'Marianne', 'Marie', 'Marine', 'Marthe', 'Martine', 'Maryse',
        'Mathilde', 'Michèle', 'Michelle', 'Michelle', 'Monique', 'Nathalie', 'Nath', 'Nathalie', 'Nicole', 'Noémi', 'Océane',
        'Odette', 'Olivie', 'Patricia', 'Paulette', 'Pauline', 'Pénélope', 'Philippine', 'Renée', 'Sabine', 'Simone', 'Sophie',
        'Stéphanie', 'Susanne', 'Suzanne', 'Susan', 'Suzanne', 'Sylvie', 'Thérèse', 'Valentine', 'Valérie', 'Véronique',
        'Victoire', 'Virginie', 'Zoé', 'Camille', 'Dominique'
    ];

    public string $firstname;
    public string $lastname;
    public string $middlename;
    public string $phone;
    public function __construct(private readonly Generator $faker)
    {
        $this->firstname = $this->faker->randomElement($this->firstnames);
        $this->lastname = $this->faker->randomElement($this->lastnames);
        $this->middlename = $this->faker->randomElement($this->lastnames);
        $this->phone = $this->phoneNumber();
    }

    private function phoneNumber(): string
    {
        $prefix = $this->faker->randomElement(['99', '97', '98', '81', '82', '83', '85', '84', '89', '90', '91']);
        $code = '+243';
        return $code . $prefix . $this->faker->randomNumber(7, true);
    }

}
