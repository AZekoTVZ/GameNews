class Proba{
    constructor(ime) {
        this.ime = ime;
    }
    Pozdrav(){
        console.log(`Hello there ${this.ime}!`);
    }
    GithubDesktop(){
        console.log("GithubDesktop povezan!💪");
    }
}
const p1 = new Proba("Zeko"); p1.Pozdrav();
const p2 = new Proba("Marin");