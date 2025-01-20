function bubblesort(tab, croissant) {
    let n = tab.length;
    for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            if ((croissant && tab[j] > tab[j + 1]) || (!croissant && tab[j] < tab[j + 1])) {
                let temp = tab[j];
                tab[j] = tab[j + 1];
                tab[j + 1] = temp;
            }
        }
    }
    return tab;
}

let tab1 = ["abc", "ghi", "def"];
console.log(bubblesort(tab1, true));
console.log(bubblesort(tab1, false));