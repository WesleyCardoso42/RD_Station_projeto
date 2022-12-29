<form action="/enviar.php" method="post" class="form-cadastro">
    <div class="form-cabecalho">
        <h3>Comece seus 10 dias de teste grátis do RD Station Marketing!</h3>
        <p>Não precisa cadastrar cartão de crédito. 😉</p>
    </div>
    <hr>
    <div class="input-text">
        <label for="nome">Diga, qual seu nome?</label>
        <input type="text" name="nome" value="nome" placeholder="Insira seu nome">
    </div>
    <div class="input-text">
        <label for="email">Seu email de trabalho</label>
        <input type="text" name="email" value="email" placeholder="Insira seu email">
    </div>
    <div class="input-text">
        <label for="telefone">Seu telefone</label>
        <input type="number" name="telefone" value="telefone" placeholder="Insira seu número de telefone">
    </div>
    <div class="input-text">
        <label for="ocupacao">Seu cargo de ocupação</label>
        <input type="text" name="cargo" value="cargo" placeholder="Selecione seu cargo">
    </div>
    <div class="input-text">
        <label for="senha">Crie uma senha</label>
        <input type="password" name="senha" value="senha" placeholder="••••••••">
    </div>
    <div class="input-text">
        <label for="senha">Confirme sua senha</label>
        <input type="password" name="senha" value="senha" placeholder="Branding-rd@2021*">
    </div>
    <div>
        <fieldset>
            <p>Qual o site da sua empresa?</p>
            <div class="site-radio">
                <input type="radio" name="site" id="checkbox-1" checked>
                <label for="checkbox-1">Meu site é</label>
            </div>
            <input type="text" class="endereco-site" placeholder="Insira o endereço do seu site">
            <div class="site-radio">
                <input type="radio" name="site" id="checkbox-2">
                <label for="checkbox-2">Ainda não tenho site</label>
            </div>
        </fieldset>
    </div>
    <ul class="lista-form">
        <li>
            Ao criar minha conta estou de acordo com os <a href="">termos de uso</a> do software e <a href="">política de privacidade</a>.
        </li>
        <li>
            Ao preencher o formulário, concordo em receber comunicações de acordo com meus interesses.
        </li>
        <li>
            *Você pode alterar suas permissões de comunicação a qualquer tempo.
        </li>
    </ul>
    <div class="button">
        <button type="submit"><img src="img/Mobile-button.png" alt=""></button>
    </div>
</form>