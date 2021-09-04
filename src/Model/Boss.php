<?php

declare(strict_types=1);

namespace FD\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Boss
{
    private string $bossname = '';
    /**
     * @SerializedName("npc")
     * @var Npc[]
     */
    private $npcs = [];

    public function addNpc(Npc $npc): void
    {
        $this->npcs[] = $npc;
    }

    public function getNpcs(): array
    {
        return $this->npcs;
    }

    public function removeNpc(Npc $npc): void
    {
    }

    public function setBossname(string $bossname): void
    {
        $this->bossname = $bossname;
    }

    public function getBossename(): string
    {
        return $this->bossname;
    }
}
