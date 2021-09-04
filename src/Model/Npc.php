<?php
declare(strict_types=1);

namespace FD\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Npc
{
    public int    $id;
    public string $name;
    /**
     * @SerializedName("url_slug")
     */
    public string $urlSlug;
    public int    $creatureDisplayId;
}
