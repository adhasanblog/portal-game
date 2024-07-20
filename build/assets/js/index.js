function searchbarInit() {
    const buttonClear = document.querySelector('.btn-clear');
    const inputSearch = document.querySelector('[aria-label="Search"]');


    inputSearch.addEventListener('input', () => {
        if (inputSearch.value.length > 0) {
            buttonClear.setAttribute('aria-hidden', false);

            buttonClear.addEventListener('click', () => {
                inputSearch.value = '';
                buttonClear.setAttribute('aria-hidden', true);
            });
        } else {
            buttonClear.setAttribute('aria-hidden', true);
        }
    });

}

export default searchbarInit;