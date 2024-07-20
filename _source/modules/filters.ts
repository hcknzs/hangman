type Filters = {
    topic: string,
    audience: string,
    [key: string]: any
}


export const filters = (selector: string, args: object = {}) => {
    const elements: NodeListOf<HTMLElement> = document.querySelectorAll(selector);
    const activeFilters: Filters = {
        topic: '',
        audience: '',
    };

    const init = () => {
        elements.forEach((selectEl: HTMLElement) => {
            selectEl.addEventListener('change', filterChangedHandler)
        });
    }

    const filterChangedHandler = (event: any) => {
        // set filter
        const selectedFilter = event.target.value;
        const name = event.target.getAttribute('name');
        activeFilters[name] = selectedFilter;
        const filters = Object.values(activeFilters).filter(e => e.trim() !== '').map(e => 'tag-' + e);

        // handle all questions
        const questions: NodeListOf<HTMLElement> = document.querySelectorAll('.question');
        questions.forEach((q: HTMLElement) => {
            const tags = Object.keys(activeFilters).map(k => q.dataset[k]?.split(' ')).flat();
            if (!filters.every(f => tags.includes(f))) {
                q.classList.add('is-hidden');
            } else {
                q.classList.remove('is-hidden');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        init();
    });
}
