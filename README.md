# TranslateAPI
TranslateAPI é uma extensão que pode ser implementada em seu servidor dando auxilio a jogadores externos.

# Get Start:
Primeiramente importe a lib para seu projeto.
```js
use zBanXD\TranslateAPI;
```

Posteriormente crie uma variável com o valor da instancia da lib
```js
$instance = TranslateAPI::getInstance();
```

Logo depois insira a "Mensagem", "Linguagem Original", "Linguagem a ser traduzida"
```js
$instance->translate("Alguém ai tem madeira?", "pt-br", "en");
Saída -> "Does anyone have wood there?"
```

Caso desejar usar o detector de linguagem no parâmetro "Mensagem" substitua o segundo parâmetro por null!
```js
$instance->translate("Alguém ai tem madeira?", null, "en");
Saída -> "Does anyone have wood there?"
```

## License

[MIT License](LICENSE)
