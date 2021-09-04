<?php

declare(strict_types=1);

namespace FD\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Boss
{
    /**
     * @SerializedName("boss_name")
     */
    public string $bossName = '';

    /**
     * @SerializedName("npc")
     * @var Npc[]
     */
    private array $npcs = [];

    /**
     * Required method for the Npc[] deserialization
     */
    public function addNpc(Npc $npc): void
    {
        $this->npcs[] = $npc;
    }

    /**
     * Required method for the Npc[] deserialization
     */
    public function getNpcs(): array
    {
        return $this->npcs;
    }

    /**
     * Required method for the Npc[] deserialization
     */
    public function removeNpc(Npc $npc): void
    {
        // intentionally empty, only required for deserialization
    }
}
