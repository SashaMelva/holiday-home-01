import './bootstrap';

let inputChildren = document.querySelector('#count_children');
document.querySelector('#minus-children').onclick = function() {
    if (inputChildren.value !== "0") {
        inputChildren.value -=  1;
    }
};
document.querySelector('#plus-children').onclick = function() {
    if (inputChildren.value !== "8") {
        inputChildren.value = inputChildren.value - 0  + 1;
    }
};


let inputAdults = document.querySelector('#count_adults');
document.querySelector('#minus-adults').onclick = function() {
    if (inputAdults.value !== "1") {
        inputAdults.value -=  1;
    }
};
document.querySelector('#plus-adults').onclick = function() {
    if (inputAdults.value !== "8") {
        inputAdults.value = inputAdults.value - 0  + 1;
    }
};


