<?php
declare(strict_types=1);

namespace FD\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Npc
{
    /**
     * The @ indicates the value will be read from the xml attribute
     *
     * @SerializedName("@id")
     */
    public int    $id;
    public string $name;
    /**
     * @SerializedName("url_slug")
     */
    public string $urlSlug;
    public int    $creatureDisplayId;
}
