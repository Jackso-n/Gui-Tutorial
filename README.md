# Gui-Tutorial
Help making Gui In Api 4.0 of Pocketmine
#Main code

```php
$menu = InvMenu::create(InvMenu::TYPE_CHEST);
$inventory = $menu->getInventory();
$menu->setName("Your Name");
$inventory->addItem(VanillaItems::DIAMOND());
$menu->send($player);
```
