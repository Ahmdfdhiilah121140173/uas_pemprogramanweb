CREATE TABLE `users` (
   `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE jujutsu_sorcerer (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    cursed_technique VARCHAR(50) NOT NULL,
    domain_expansion BOOLEAN,
    type VARCHAR(20) NOT NULL,
    age INT NOT NULL
);
INSERT INTO jujutsu_sorcerer  (name, cursed_technique, domain_expansion, type, age)
VALUES
    ('Itadori Yuji', 'Superhuman Physical Abilities', FALSE, 'human', 16),
    ('Fushiguro Megumi', 'Ten Shadows Technique', TRUE, 'human', 15),
    ('Kugisaki Nobara', 'Cursed Corpse: Straw Doll Technique', FALSE, 'human', 16),
    ('Gojo Satoru', 'Limitless Cursed Technique', TRUE, 'human', 28),
    ('Sukuna', 'Cursed Manipulation', TRUE, 'cursed spirit', 1000), 
    ('Inumaki Toge', 'Cursed Speech', FALSE, 'human', 17),
    ('Panda', 'Cursed Corpse: Corpse Manipulation', FALSE, 'cursed spirit', 500), 
    ('Maki Zenin', 'Superhuman Physical Abilities', FALSE, 'human', 17),
    ('Nanami Kento', 'Cursed Technique: Ratio Technique', FALSE, 'human', 28),
    ('Utahime Iori', 'Cursed Technique: Lullaby', FALSE, 'human', 26),
    ('Geto Suguru', 'Curse Manipulation', TRUE, 'cursed spirit', 800), 
    ('Toudou Aoi', 'Cursed Technique: Boogie Woogie', FALSE, 'human', 17),
    ('Amanai Michizane', 'Cursed Manipulation', TRUE, 'cursed spirit', 600), 
    ('Okkotsu Yuta', 'Ryoiki Cursed Technique', TRUE, 'human', 16),
    ('Yaga Yutaro', 'Cursed Technique: Puppets', FALSE, 'human', 58),
    ('Kamo Noritoshi', 'Cursed Technique: Lapse: Blue', FALSE, 'human', 18),
    ('Yoshino Junpei', 'Cursed Corpse: Junpei\'s Mother', FALSE, 'cursed spirit', 25),
    ('Momo Nishimiya', 'Cursed Technique: Cursed Tools', FALSE, 'human', 16),
    ('Aoi Todo', 'Cursed Technique: Boogie Woogie', FALSE, 'human', 16),
    ('Yuta Okkotsu', 'Ryoiki Cursed Technique', TRUE, 'human', 16);
