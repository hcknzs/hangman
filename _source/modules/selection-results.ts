export const results = (selector: string) => {
    const elements: NodeListOf<HTMLElement> = document.querySelectorAll(selector);

    const init = () => {
        elements.forEach((el: HTMLElement) => {
            el.addEventListener('click', changeHandler);
        });
    }

    const changeHandler = (event: any) => {
        const el = event.currentTarget;
        const radios = el.querySelectorAll('input');
        const isSelected = Array.from(radios).some((radio: any) => radio.checked);
        if (isSelected) {
            el.classList.add('is-answered');
        }

        const count = Array.from(elements).filter((el: any) => el.classList.contains('is-answered')).length;
        console.log(count);
    }

    document.addEventListener('DOMContentLoaded', () => {
        init();
    });
}
