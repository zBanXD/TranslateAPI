<?php

namespace zBanXD;

use zBanXD\GoogleTranslate;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase {

    public function onEnable(): void
    {
        Server::getInstance()->getLogger()->info("§ TranslateAPI § Ativado e funcional!");
    }

    /**
     * Retorna instancia para poder ser implementado projetos externos.
     */
    public function getInstance()
    {
        return $this;
    }

    /**
     * Função para receber mensagens (strings) e retornar mensagens (strings) traduzidas.
     */
    public function translate(string $message, string $original, string $target)
    {
        $tr = new GoogleTranslate();
        $tr->setSource($original);
        $tr->setTarget($target);
        return $tr->translate($message);
    }

}
