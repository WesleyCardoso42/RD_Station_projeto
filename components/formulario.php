<form action="/enviar.php" method="post" class="form-cadastro">
    <div class="margem">
        <div class="form-cabecalho">
            <h3>Comece seus 10 dias de teste grátis do RD Station Marketing!</h3>
            <p>Não precisa cadastrar cartão de crédito. 😉</p>
        </div>
        <hr class="divisoria">
        <div class="input-text">
            <label for="nome">Diga, qual seu nome?</label>
            <input type="text" name="nome" placeholder="Insira seu nome" required>
        </div>
        <div class="input-text">
            <label for="email">Seu email de trabalho</label>
            <input type="text" name="email" placeholder="Insira seu email" required>
        </div>
        <div class="input-text">
            <label for="telefone">Seu telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="Insira seu número de telefone com DDD" maxlength="15" required/>
        </div>
        <div class="input-text">
            <label for="ocupacao">Seu cargo de ocupação</label>
            <!--<input type="text" name="cargo" placeholder="Selecione seu cargo" required> -->
            <select name="cargo" required>
                <option value="Selecione">Selecione seu cargo</option>
                <?php
                    require_once "data/cargos.php";
                    for ($i=0; $i < count($cargos); $i++) { 
                        echo '<option value="' . $cargos[$i] . '">' . $cargos[$i] . '</option>';
                    }
                ?>
            </select>
        </div>


        <div class="input-text toggle-senha">
            <label for="senha">Crie uma senha</label>
            <input class="input-senha" type="password" name="senha" id="senha" placeholder="••••••••" required>
            <img class="password" src="/img/eye-open.svg" alt="">
        </div>

        <div class="input-text toggle-senha">
            <label for="senha">Confirme sua senha</label>
            <input class="input-senha" type="password" name="senha" id="confirma-senha" placeholder="Branding-rd@2021*" required>
            <img class="password" src="/img/eye-open.svg" alt="">
        </div>

        <span id="valida-senhas"></span>

        <div class="site-empresa">
            <p>Qual o site da sua empresa?</p>
        </div>
        <div class="site-radio">
            <input type="radio" name="site" id="checkbox-1" checked required>
            <label for="checkbox-1">Meu site é</label>
        </div>
        <input type="text" name="endereco_site" class="endereco-site" placeholder="Insira o endereço do seu site" required>
        <div class="site-radio">
            <input type="radio" name="site" id="checkbox-2" required>
            <label for="checkbox-2">Ainda não tenho site</label>
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
    </div>
    <div class="button">
        <button type="submit"><img src="img/Mobile-button.png" alt=""></button>
    </div>
</form>