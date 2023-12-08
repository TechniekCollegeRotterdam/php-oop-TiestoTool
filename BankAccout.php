<?php
class BankAccount
{
    //properties
    public $accountNumber;
    public $balance;


    public function __construct($balance, $accountNumber)
    {
    $this->accountNumber = $accountNumber;
    $this->balance = $balance;
    }
    public function getAccountNumber()
    {
    return $this->accountNumber;
    }
    public function setAccountNumber($accountNumber)
    {
        return $this->accountNumber = $accountNumber;
    }
    public function getBalance()
    {
    return "€" . number_format($this->balance, 2);
    }
    public function depost($amount)
    {
        return $this->balance += $amount;
    }
    public function withdraw($amount)
    {
        if($this->balance <= $amount)
        {
            echo "uw heeft onvoldoende saldo om ". $amount . " op te halen ". "<br>";
        }
        else{
            return "u heeft ". $amount. "opgehaalt". $this->balance -= $amount. "<br>";
        }

    }

}
$account1 = new BankAccount(100, 123456);
echo  "Uw bankaccount nummer is: ".  $account1->getAccountNumber(). "<br>";
echo "Uw huidige saldo is: ". $account1->getBalance()."<br>";
$account1->setAccountNumber(987512);
echo "Uw bankaccount nummer is gewijzigd in: ". $account1->getaccountNumber(). "<br>";
$withdraw = 200;
$account1->withdraw($withdraw);

$deposit = 20;
$account1->depost($deposit);
echo "U heeft € ". $deposit . " Op uw bankrekening gezet. Uw huidige saldo is: ". $account1->getBalance();





