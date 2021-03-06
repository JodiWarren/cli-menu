<?php

namespace PhpSchool\CliMenu\MenuItem;

/**
 * Class SelectableItem
 *
 * @package PhpSchool\CliMenu\MenuItem
 * @author Michael Woodward <mikeymike.mw@gmail.com>
 */
class SelectableItem implements MenuItemInterface
{
    use SelectableTrait;

    /**
     * @var callable
     */
    private $selectAction;

    /**
     * @param string $text
     * @param callable $selectAction
     * @param bool $showItemExtra
     */
    public function __construct($text, callable $selectAction, $showItemExtra = false)
    {
        $this->text          = $text;
        $this->selectAction  = $selectAction;
        $this->showItemExtra = $showItemExtra;
    }

    /**
     * Execute the items callable if required
     *
     * @return callable|void
     */
    public function getSelectAction()
    {
        return $this->selectAction;
    }

    /**
     * Return the raw string of text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
