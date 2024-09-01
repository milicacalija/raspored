<?php

// Definisanje osnovnih podataka
$razredi = ["5-1", "5-2", "5-3", "5-4","6-1","6-2","6-3","6-4","7-1", "7-2", "7-3", "7-4", "8-1", "8-2", "8-3", "8-4"];
$predmeti = ["Matematika", "Srpski jezik", "Engleski jezik", "Informatika","Tehničko", "Muzičko", "Fizika", "Hemija", "Fizičko", "Geografija", "Biologija", "Istorija",  "Ruski", "Francuski", "Likovno"];
$nastavnici = [];
for ($i = 1; $i <= 27; $i++) {
    $nastavnici[] = "Nastavnik $i";
}

// Primer ogranicenja (nastavnici koji ne mogu imati časove u određeno vreme)
$ogranicenja_nastavnika = [
    "Slavica Brkić" => [ "Ponedeljak 6","Utorak 6","Sreda 6","Četvrtak 6", "Petak 6"],

     "Ivan Drljača" => ["Ponedeljak 1","Ponedeljak 2","Ponedeljak 3","Ponedeljak 4","Ponedeljak 5", "Ponedeljak 6","Ponedeljak 7","Ponedeljak 8","Sreda 1", "Sreda 2","Sreda 3","Sreda 4","Sreda 5","Sreda 6","Sreda 7","Sreda 8",],
       "Jelena Munđa" => ["Petak 4","Petak 5","Petak 6","Petak 7","Petak 8",],
       "Sabrina Kurajica" => ["Ponedeljak 1", "Ponedeljak 2","Utorak 1","Utorak 2","Sreda 1","Sreda 2","Četvrtak 1", "Četvrtak 2", "Petak 1", "Petak 2"],
    // Dodaj druga ogranicenja po potrebi
];
$broj_casova_po_predmetu = [
    "5-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
    "6-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
    
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
    "7-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
 
   
      "7-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
      "7-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
      "7-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
];

// Povezivanje predmeta sa nastavnicima po razredu i odeljenju
$povezivanje_predmeta = [
    "5-1" => [
        
        "Geografija" => "Sanja Arsenijevic 211",
       "Biologija" => "Ivana Stanković 201",
        "Istorija" => "Vesna Kostić 213",
         "Engleski jezik" => "Milica Matić 113",
 "Ruski" => "Nataša Trišić, 110",
 "Francuski" => "Snežana Budimčić 112",
  "Likovno" => "Jelena Munđa 221",
      "Srpski jezik" => "Slavica Brkić Milovanović 111",
       "Matematika" => "Svetlana Janković 203",
        "Tehničko" => "Aleksandar Bogićević TT",
         "Muzičko" => "Jelena Oparušić kabinet za muzičko",
         "Informatika" => "Nevena Čvorović kabinet za informatiku",
         "Fizičko" => "David",
        // Dodaj ostale predmete...
    ],
    "5-2" => [
       "Geografija" => "Sanja Arsenijevic 211",
     "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
     "Engleski jezik"=> "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
            "Srpski jezik" => "Marija Stamenković",
               "Matematika" => "Svetlana Janković",
                "Tehničko" => "Aleksandar Bogićević",
                 "Muzičko" => "Jelena Oparušić",
                 "Informatika" => "Nevena Čvorović",
                  "Fizičko" => "Darko",
    ],
     "5-3" => [
       "Geografija" => "Sanja Arsenijevic",
        "Biologija" => "Sabrina Kurajica",
        "Istorija" => "Vesna Kostić",
    "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
            "Srpski jezik" => "Slavica Brkić Milovanović",
            "Matematika" => "Mina Teoharević",
             "Tehničko" => "Snežana Rosić",
              "Muzičko" => "Jelena Oparušić",
              "Informatika" => "Nevena Čvorović",
               "Fizičko" => "Darko",
    ],
     "5-4" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
       "Istorija" => "Vesna Kostić",
    "Engleski jezik"=> "Milica Matić",
    "Ruski" => "Nataša Trišić",
      "Francuski" => "Snežana Budimčić",
       "Likovno" => "Jelena Munđa",
        "Srpski jezik" => "Marija Stamenković",
        "Matematika" => "Mina Teoharević",
          "Tehničko" => "Snežana Rosić",
           "Muzičko" => "Jelena Oparušić",
           "Informatika" => "Nevena Čvorović",
            "Fizičko" => "David",
    ],
    "6-1" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
     "Istorija" => "Vesna Kostić",
            "Engleski jezik" => "Milica Matić",
  "Ruski" => "Nataša Trišić",
"Francuski" => "Snežana Budimčić",
"Likovno" => "Nina Manić Jovanović",
 "Srpski jezik" => "Tatjana Hadžić",
    "Matematika" => "Svetlana Janković",
  "Tehničko" => "Snežana Rosić",
   "Fizika" => "Jovana Živanović",
    "Muzičko" => "Jelena Oparušić",
    "Informatika" => "Nevena Čvorović",
     "Fizičko" => "David",
    ],
      "6-2" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
      "Istorija" => "Vesna Kostić",
           "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
         "Srpski jezik" => "Marija Stamenković",
            "Matematika" => "Svetlana Janković",
              "Tehničko" => "Snežana Rosić",
               "Fizika" => "Jovana Živanović",
                "Muzičko" => "Jelena Oparušić",
                "Informatika" => "Nevena Čvorović",
                 "Fizičko" => "Darko",
    ],
      "6-3" => [
     "Geografija" => "Sanja Arsenijevic",
       "Biologija" => "Sabrina Kurajica",
     "Istorija" => "Vesna Kostić",
       "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
      "Francuski" => "Snežana Budimčić",
       "Likovno" => "Jelena Munđa",
        "Srpski jezik" => "Marija Stamenković",
           "Matematika" => "Svetlana Janković",
             "Tehničko" => "Žarko Gojković",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "Darko",
    ],
      "6-4" => [
        "Geografija" => "Sanja Arsenijevic",
    "Biologija" => "Sabrina Kurajica",
    "Istorija" => "Vesna Kostić",
            "Engleski jezik" => "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
     "Francuski" => "Snežana Budimčić",
     "Likovno" => "Nina Manić Jovanović",
      "Srpski jezik" => "Jovana Repić",
      "Matematika" => "Mina Teoharević",
        "Tehničko" => "Snežana Rosić",
         "Fizika" => "Jovana Živanović",
          "Muzičko" => "Jelena Oparušić",
          "Informatika" => "Nevena Čvorović",
           "Fizičko" => "David",
    ],
        "7-1" => [
          "Geografija" => "Jelena Živković",
   "Biologija" => "Ivana Stanković",
       "Istorija" => "Vesna Kostić",
      "Engleski jezik" => "Olivera Nedeljković",
         "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Nina Manić Jovanović",
         "Srpski jezik" => "Tatjana Hadžić",
         "Matematika" => "Mina Teoharević",
          "Tehničko" => "Aleksandar Bogićević",
            "Hemija" => "Milica Čalija",
             "Fizika" => "Jovana Živanović",
              "Muzičko" => "Jelena Oparušić",
              "Informatika" => "Nevena Čvorović",
               "Fizičko" => "David",
    ],
        "7-2" => [
         "Geografija" => "Jelena Živković",
   "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
     "Engleski jezik"=> "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
    "Francuski" => "Snežana Budimčić",
    "Likovno" => "Nina Manić Jovanović",
     "Srpski jezik" => "Tatjana Hadžić",
     "Matematika" => "Mina Teoharević",
      "Tehničko" => "Aleksandar Bogićević",
       "Hemija" => "Milica Čalija",
        "Fizika" => "Jovana Živanović",
         "Muzičko" => "Jelena Oparušić",
         "Informatika" => "Nevena Čvorović",
         "Fizičko" => "Darko",
    ],
        "7-3" => [
           "Geografija" => "Jelena Živković",
     "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
           "Engleski jezik" => "Olivera Nedeljković",
      "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
       "Likovno" => "Nina Manić Jovanović",
        "Srpski jezik" => "Jovana Repić",
           "Matematika" => "Snežana Bogićević",
            "Tehničko" => "Aleksandar Bogićević",
             "Hemija" => "Milica Čalija",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "David, Darko",
                 
    ],
        "7-4" => [
        "Geografija" => "Jelena Živković",
      "Biologija" => "Ivana Stanković",
       "Istorija" => "Vesna Kostić",
        "Engleski jezik" => "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
       "Likovno" => "Nina Manić Jovanović",
           "Srpski jezik" => "Slavica Brkić Milovanović",
           "Matematika" => "Mina Teoharević",
            "Tehničko" => "Aleksandar Bogićević",
             "Hemija" => "Milica Čalija",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "Darko",
    ],

        "8-1" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
       "Istorija" => "Ivan Drljača",
        "Engleski jezik" => "Milica Matić",
       "Ruski" => "Nataša Trišić",
  "Francuski" => "Snežana Budimčić",
  "Likovno" => "Nina Manić Jovanović",
   "Srpski jezik" => "Jovana Repić",
   "Matematika" => "Snežana Bogićević",
    "Tehničko" => "Aleksandar Bogićević",
     "Hemija" => "Milica Čalija",
      "Fizika" => "Jovana Živanović",
       "Muzičko" => "Jelena Oparušić",
       "Informatika" => "Nevena Čvorović",
        "Fizičko" => "David",
    ],
        "8-2" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
           "Istorija" => "Ivan Drljača",
         "Engleski jezik" => "Milica Matić",
       "Ruski" => "Nataša Trišić",
   "Francuski" => "Snežana Budimčić",
   "Likovno" => "Nina Manić Jovanović",
    "Srpski jezik" => "Jovana Repić",
    "Matematika" => "Snežana Bogićević",
     "Tehničko" => "Aleksandar Bogićević",
      "Hemija" => "Milica Čalija",
       "Fizika" => "Jovana Živanović",
        "Muzičko" => "Jelena Oparušić",
        "Informatika" => "Nevena Čvorović",
         "Fizičko" => "Darko",
    ],
        "8-3" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
        "Istorija" => "Ivan Drljača",
       "Engleski jezik"=> "Milica Matić",
      "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Nina Manić Jovanović",
         "Srpski jezik" => "Slavica Brkić Milovanović",
         "Matematika" => "Snežana Bogićević",
          "Tehničko" => "Aleksandar Bogićević",
           "Hemija" => "Milica Čalija",
            "Fizika" => "Jovana Živanović",
             "Muzičko" => "Jelena Oparušić",
             "Informatika" => "Nevena Čvorović",
              "Fizičko" => "Darko",
    ],
        "8-4" => [
        "Geografija" => "Sanja Arsenijevic",
       "Biologija" => "Sabrina Kurajica",
             "Istorija" => "Ivan Drljača",
     "Engleski jezik" => "Milica Matić",
        "Ruski" => "Nataša Trišić",
     "Francuski" => "Snežana Budimčić",
     "Likovno" => "Nina Manić Jovanović",
      "Srpski jezik" => "Tatjana Hadžić",
      "Matematika" => "Snežana Bogićević",
      "Tehničko" => "Aleksandar Bogićević",
       "Hemija" => "Milica Čalija",
        "Fizika" => "Jovana Živanović",
         "Muzičko" => "Jelena Oparušić",
          "Informatika" => "Nevena Čvorović",
           "Fizičko" => "David",
    ],
    // Dodaj druge razrede i odeljenja...
];
function inicijalizuj_raspored() {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    $raspored = [];
    foreach ($dani as $dan) {
        $raspored[$dan] = array_fill(0, 8, null); // 8 časova dnevno
    }
    return $raspored;
}

function validno_postavljanje($raspored, $dan, $sat, $predmet, $nastavnik, $ogranicenja_nastavnika) {
    if (in_array("$dan " . ($sat + 1), $ogranicenja_nastavnika[$nastavnik] ?? [])) {
        return false;
    }
    if ($raspored[$dan][$sat] !== null) {
        return false;
    }
    if ($predmet !== "Tehničko" && in_array($predmet, array_column($raspored[$dan], 0))) {
        return false;
    }
  // Proverava da li je predmet "Srpski jezik" i da li je postavljen 6. čas
  if ($predmet === "Srpski jezik" && $sat == 5) {
    return false;
}
// Proverava da li je predmet "Srpski jezik" i da li je postavljen 6. čas
if ($predmet === "Matematika" && $sat == 5) {
    return false;
}

    return true;
}

function rotiraj_casove(&$raspored, $predmet, $nastavnik, $ogranicenja_nastavnika) {
    foreach ($raspored as $dan => &$casovi) {
        // Pronađi sve slobodne časove za dati dan
        $satovi = array_keys(array_filter($casovi, function($cas) {
            return $cas === null;
        }));

        shuffle($satovi); // Nasumično rotira slobodne sate

        foreach ($satovi as $sat) {
            if (validno_postavljanje($raspored, $dan, $sat, $predmet, $nastavnik, $ogranicenja_nastavnika)) {
                postavi_cas_bez_pauze($raspored, $dan, $sat, $predmet, $nastavnik);
                break; // Prelazi na sledeći dan
            }
        }
    }
}


function validno_postavljanje_blok($raspored, $dan, $sat, $nastavnik, $ogranicenja) {
    if (in_array("$dan " . ($sat + 1), $ogranicenja[$nastavnik] ?? []) ||
        in_array("$dan " . ($sat + 2), $ogranicenja_nastavnika[$nastavnik] ?? [])) {
        return false;
    }
    if ($raspored[$dan][$sat] !== null || $raspored[$dan][$sat + 1] !== null) {
        return false;
    }
    return true;
}


function postavi_blok_cas(&$raspored, $dan, $sat, $predmet, $nastavnik) {
    $raspored[$dan][$sat] = [$predmet, $nastavnik];
    $raspored[$dan][$sat + 1] = [$predmet, $nastavnik];
}

function postavi_cas_bez_pauze(&$raspored, $dan, $sat, $predmet, $nastavnik) {
    for ($i = 0; $i < count($raspored[$dan]); $i++) {
        if ($raspored[$dan][$i] === null) {
            $raspored[$dan][$i] = [$predmet, $nastavnik];
            break;
        }
    }
}

function postavi_cas_sa_razmakom(&$raspored, $dani, $predmet, $nastavnik, $casovi_za_nedelju, $ogranicenja_nastavnika) {
    $postavljeni_casovi = 0;
    $korisceni_dani_i_sati = []; // Keep track of used days and slots

    while ($postavljeni_casovi < $casovi_za_nedelju) {
        // Randomize the days array to ensure different order each iteration
        shuffle($dani);

        foreach ($dani as $dan) {
            for ($sat = 0; $sat < 8; $sat++) {
                if (!isset($korisceni_dani_i_sati["$dan-$sat"]) && validno_postavljanje($raspored, $dan, $sat, $predmet, $nastavnik, $ogranicenja_nastavnika)) {
                    $raspored[$dan][$sat] = [$predmet, $nastavnik];
                    $korisceni_dani_i_sati["$dan-$sat"] = true; // Mark the slot as used
                    $postavljeni_casovi++;
                    break; // Move to the next day to spread the classes
                }
            }

            if ($postavljeni_casovi >= $casovi_za_nedelju) {
                break; // All classes are scheduled
            }
        }
    }
}
function generisi_raspored_za_odeljenje($razred, $povezivanje_predmeta, $broj_casova_po_predmetu, $ogranicenja_nastavnika) {
    $raspored = inicijalizuj_raspored();
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    $prioritet_predmeti = ["Srpski jezik", "Matematika", "Tehničko"];

    // Postavljanje blok časova za Tehničko
    if (isset($broj_casova_po_predmetu[$razred]["Tehničko"])) {
        $nastavnik = $povezivanje_predmeta[$razred]["Tehničko"];
        $casovi_za_nedelju = $broj_casova_po_predmetu[$razred]["Tehničko"];
        
        while ($casovi_za_nedelju > 0) {
            foreach ($dani as $dan) {
                $pocetni_sat = rand(0, 6);
                if (validno_postavljanje($raspored, $dan, $pocetni_sat, "Tehničko", $nastavnik, $ogranicenja_nastavnika)) {
                    postavi_blok_cas($raspored, $dan, $pocetni_sat, "Tehničko", $nastavnik);
                    $casovi_za_nedelju -= 2;
                    break;
                }
            }
        }
        unset($broj_casova_po_predmetu[$razred]["Tehničko"]);
    }

    // Postavljanje časova za Matematiku i Srpski jezik
    foreach ($prioritet_predmeti as $predmet) {
        if (isset($broj_casova_po_predmetu[$razred][$predmet])) {
            $nastavnik = $povezivanje_predmeta[$razred][$predmet];
            $casovi_za_nedelju = $broj_casova_po_predmetu[$razred][$predmet];
            postavi_cas_sa_razmakom($raspored, $dani, $predmet, $nastavnik, $casovi_za_nedelju, $ogranicenja_nastavnika);
            unset($broj_casova_po_predmetu[$razred][$predmet]);
        }
    }

    // Postavljanje svih ostalih časova
    foreach ($broj_casova_po_predmetu[$razred] as $predmet => $casovi_za_nedelju) {
        if (!isset($povezivanje_predmeta[$razred][$predmet])) {
            echo "Nema nastavnika za predmet: $predmet u razredu $razred\n";
            continue;
        }

        $nastavnik = $povezivanje_predmeta[$razred][$predmet];
        $brojac = 0;
        $maks_pokusaja = 2000;

        while ($casovi_za_nedelju > 0 && $brojac < $maks_pokusaja) {
            $dan = array_rand($raspored);
            $pocetni_sat = rand(0, 6);

            if (validno_postavljanje($raspored, $dan, $pocetni_sat, $predmet, $nastavnik, $ogranicenja_nastavnika)) {
                postavi_cas_bez_pauze($raspored, $dan, $pocetni_sat, $predmet, $nastavnik);
                $casovi_za_nedelju--;
            }

            $brojac++;
        }

        if ($casovi_za_nedelju > 0) {
            echo "Prekida se zbog predugog trajanja petlje za predmet $predmet u razredu $razred\n";
        }
    }

    return $raspored;
}


function generisi_raspored_za_sve_razrede($razredi, $povezivanje_predmeta, $broj_casova_po_predmetu, $ogranicenja_nastavnika) {
    $rasporedi = [];
    foreach ($razredi as $razred) {
        $rasporedi[$razred] = generisi_raspored_za_odeljenje($razred, $povezivanje_predmeta, $broj_casova_po_predmetu, $ogranicenja_nastavnika);
    }
    return $rasporedi;
}

function prikazi_raspored_tabela($raspored) {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<tr><th>Dan</th><th>Čas 1</th><th>Čas 2</th><th>Čas 3</th><th>Čas 4</th><th>Čas 5</th><th>Čas 6</th><th>Čas 7</th><th>Čas 8</th></tr>";
    foreach ($dani as $dan) {
        echo "<tr>";
        echo "<td>$dan</td>";
        foreach ($raspored[$dan] as $cas) {
            if ($cas === null) {
                echo "<td>Slobodno</td>";
            } else {
                list($predmet, $nastavnik) = $cas;
                echo "<td>$predmet<br>($nastavnik)</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

set_time_limit(300);
$svi_rasporedi = generisi_raspored_za_sve_razrede($razredi, $povezivanje_predmeta, $broj_casova_po_predmetu, $ogranicenja_nastavnika);

foreach ($svi_rasporedi as $razred => $raspored) {
    echo "<h2>Raspored za $razred</h2>";
    prikazi_raspored_tabela($raspored);
    echo "<hr>";
}
