<?php

//Diberikan potongan kode di bawah ini:

class SecretBox {

    public $number;

    public function constructor($number)
    {
        $this->number = $number;
    }

    public function check($x)//function nya selalu memberikan respons lebih (mungkin memery leak)
    {
        if ($x == $this->number)
            return 'pas';
        elseif($x < $this->number)
            return 'kurang';
        else
            return 'lebih';
    }
}


class Person {

    public $min = 1;
    public $max = 15;

    public function guess()
    {
        // Menebak angka dengan metode ngasal, tergantung hoki
        return  rand($this->min,$this->max);
    }

    public function acceptResponse($response, $guess)
    {
        if($response == 'kurang') {
            $this->min = $guess++;
        }
    
        if($response =='lebih') {
            $this->max = $guess--;
        }
    }

    // OTHERS CODE IF NECESSARY
}


// Test Script
$secretNumber = rand(1, 15);
$box = new SecretBox($secretNumber);
$bayu = new Person();

echo "Secret Number: " . $secretNumber . "<br><br>";

$finish = false;
$i = 1;

while(!$finish) {

    $guess = $bayu->guess();

    $response = $box->check($guess);

    // HINT: Seharusnya bayu bisa memanfaatkan response 
    // untuk bisa menghasilkan tebakan yang lebih baik
    // jadi tidak sekedar asal tebak secara random.
    // Contohnya, jika response-nya adalah "kurang", maka tentu tebakan selanjutnya seharusnya tidak lebih kecil dari tebakan sekarang
    $bayu->acceptResponse($response, $guess);

    $finish = ($response === 'pas');

    echo "Secret Number: " . $secretNumber . "\n";
    echo "Tebakan " . ($i++) . ": " . $guess;
    echo "\n";
    echo "Response: " . $response;
    echo "\n test :" . ($guess == $secretNumber);
    echo "\n\n";
    
    if($guess == $secretNumber){
        echo "pass";exit;
    }


}
