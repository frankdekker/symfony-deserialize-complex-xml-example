## Summary

Example to show how to deserialize nested array of objects. Take note of the `@SerializedName` that _should_ be the element name in the xml.

### How to run
```shell
composer install
composer run test
```

Input:
```xml
<?xml version="1.0" encoding="UTF-8" ?>
<boss>
    <bossname>Big main boss</bossname>
    <npc>
        <id>1</id>
        <name>Skeleton</name>
        <urlSlug>dungeon-skeleton</urlSlug>
        <creatureDisplayId>5</creatureDisplayId>
    </npc>
    <npc>
        <id>2</id>
        <name>Mage</name>
        <urlSlug>dungeon-mage</urlSlug>
        <creatureDisplayId>6</creatureDisplayId>
    </npc>
</boss>
```

Output:
```text
class FD\Model\Boss#30 (2) {
  private string $bossname =>
  string(13) "Big main boss"
  private $npcs =>
  array(2) {
    [0] =>
    class FD\Model\Npc#45 (4) {
      public int $id =>
      int(1)
      public string $name =>
      string(4) "name"
      public string $urlSlug =>
      string(4) "slug"
      public int $creatureDisplayId =>
      int(5)
    }
    [1] =>
    class FD\Model\Npc#56 (4) {
      public int $id =>
      int(2)
      public string $name =>
      string(4) "name"
      public string $urlSlug =>
      string(4) "slug"
      public int $creatureDisplayId =>
      int(6)
    }
  }
}
```
