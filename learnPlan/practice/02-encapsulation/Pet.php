<?php
declare(strict_types=1);
class Pet
{
    public string $name;
    public int $age;
    public int $hunger;
    const ID = 8;

    public function __construct(
        string $name
        ,
        int $age,
        int $hunger
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->hunger = $hunger;
    }
    public function getTamagotchi(): string{
        return 'Имя ' .$this->name.
        'возраст ' .$this->age.
        'голод ' .$this->hunger.
            '<br>' ;
    }
    public function upgredeHunger(int $hunger): void
    {
        $this->hunger = $hunger;
    }

    public function feed(): int{
        $this->hunger = max(0, $this->hunger - 3);
    }

}

$Tamagotchi = new Pet('Туча ', 1 , 7);
echo $Tamagotchi->getTamagotchi();
 $Tamagotchi->upgredeHunger(2);

