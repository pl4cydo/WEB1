// // 1) a)
// let vetor = [1,2,3]

// function inversoVetor(vetor, i){
//     if(i<0){
//         return
//     }
//     console.log(vetor[i])
//     inversoVetor(vetor, i - 1)
// }
// inversoVetor(vetor, vetor.length -1)

// b)
// let vetor = [1,2,3,4,5]
// function maiorIndice(vetor, i){
//     if(i == vetor.length){
//         return 
//     }
//     if(i = vetor.length -1){
//         console.log(vetor[i])
//     }
//     maiorIndice(vetor, i+1)
// }
// maiorIndice(vetor, 0)

// -- MEDIA 
let vetor = [3,3,3]

function soma(vetor, i){
    if(i < vetor.length){
        return vetor[i] + soma(vetor, i + 1)
    } else {
        return 0
    }

}

// console.log(soma(vetor, 0))
function media(vetor, i){
    return soma(vetor, i)/vetor.length
}

console.log(media(vetor,0))