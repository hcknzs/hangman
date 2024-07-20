import Hangman from "./hangman";


export const results = (selector: string) => {
    const elements: NodeListOf<HTMLElement> = document.querySelectorAll(selector);
    const hangman = new Hangman('.hangman');
    hangman.updateHangman(0);

    const init = () => {
        elements.forEach((el: HTMLElement) => {
            el.addEventListener('click', changeHandler);
        });
    }

    const changeHandler = (event: any) => {
        const el = event.currentTarget;
        const radios = el.querySelectorAll('input');
        const isSelected = Array.from(radios).some((radio: any) => radio.checked);
        const isNo = Array.from(radios).some((radio: any) => radio.checked && radio.getAttribute('value') === 'no');
        if (isSelected) {
            el.classList.add('is-answered');
            isNo ? el.classList.add('is-no') : el.classList.remove('is-no');
        }

        const count = Array.from(elements).filter((el: any) => el.classList.contains('is-no')).length;
        console.log(count);
        hangman.updateHangman(count);
    }

    document.addEventListener('DOMContentLoaded', () => {
        init();
    });
}
