<script>
    // import da função onMount da biblioteca do svelte
    import { onMount } from "svelte";


  // Declarando o aray vázio de filmes
  let filmes = [];
  // Declarando a variavel nome com um parametro de string
  let nome = ' ';
  // Declarando a variavel nome com um parametro de string
  let ano = ' ';

  // Aparentemente uma função assincrona é uma função que tem apossíbilidade de esperar ??? lança uma 'promessa'
  // a função assincrona faz com que o resto do codigo só percorra depois do 'await' que é um tipo de espera
  // Pelo que parece a velocidade que o código JS é lido é maior que o tempo de requisição, então para que o codigo rode, 
  // a função assincrona faz com que o codigo espere para continuar
  async function loadFilmes(){
    // essa variavel tem a função de dar request no servidor php, 
    // o 'await' é justamente para que o codigo espere o request 
    let response = await fetch('http://localhost:8080/lista.php');
    // essa variavel vai usar a variavel com a função text(), requisitando o texto que ela lê
    // de novo o await com a mesma função
    let text = await response.text();
    // acho que essa variavel vai pegar o texto e traduzir de json
    let json = JSON.parse(text);
    // no fim essa função vai transformar as informações que vieram no request do servidor de backend, depois
    // retirar o texto que esta lá, traduzir de json e entrar no array qye foi definido anteriormente.
    filmes = json;
  }

  // Essa função é chamada quando a pag é carregada
  onMount(()=>{
      loadFilmes();
  });

  // Função que vai adicionar mais filmes a lista.
  // Essa função vai criar um link que adicona informações ao servidor do php
  async function adicionarFilme(){
      // essa variavel tem a o valor de ser a criação do link
      let url = 'nome=' + nome + '&ano=' + ano;
      // a função fetch faz um request das informações para poder recarregar a pag quando adicionar um filme novo
      // Lembrar de colocar o complemento do url e lembrar que esse arquivo é o de adicionar e não o de leitura
      await fetch('http://localhost:8080/add-lista.php?' + url);
      // chamar a função load para atualizar a lista
      loadFilmes();
  }

</script>

<main>
    <h1>Lista de filmes</h1>
    <!-- inputs de informaçõoes que são adiconadas nas variaveis e chama a função adicionar os filmes -->
    <input type="text" placeholder="FILME" bind:value={nome}>
    <input type="text" placeholder="ANO" bind:value={ano}>
    <button on:click={adicionarFilme}>Adicionar</button>

    <!-- For each que percorre o array de filmes que veio do backend e transforma em lista -->
    {#each filmes as num}
        <li>{num}</li>
    {/each}
</main>

<style>
  li {
    font-size: 20pt;
    padding: 5px;
  }
</style>
