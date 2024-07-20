const config = {
    max: 2,
}

export const selection = (selector: string) => {
    const elements: NodeListOf<HTMLElement> = document.querySelectorAll(selector);
    const counter: HTMLElement | null = document.querySelector('.question-counter');
    if (counter)
        counter.innerHTML = `${config.max}`;

    const questions: string[] = [];

    const init = () => {
        elements.forEach((el: HTMLElement) => {
            el.addEventListener('click', changeHandler);
        });
    }

    const changeHandler = (event: any) => {
        event.stopPropagation();
        const el = event.currentTarget;

        if (questions.includes(el.id)) {
            // remove
            questions.splice(questions.indexOf(el.id), 1);
            el.querySelector('.checkbox').checked = false;
            el.classList.remove('has-background-primary-light');
        } else {
            // add
            if (questions.length < config.max) {
                questions.push(el.id);
                el.querySelector('.checkbox').checked = true;
                el.classList.add('has-background-primary-light');
            }
        }

        if (counter)
            counter.innerHTML = `${config.max - questions.length}`;

        return false;
    }


    document.addEventListener('DOMContentLoaded', () => {
        init();
    });
};
