

class Hangman{

	activeElement: HTMLElement | null

	constructor (selector: string){
		this.activeElement = document.querySelector(`${selector} img.active`);
		console.log(this.activeElement)
	}

	updateHangman = (amount: any) => {

		console.log(amount)
			
		if (this.activeElement === null) {
			return;
		}

		this.activeElement.classList.remove('active');
		this.activeElement = document.querySelector(`.hangman_0${amount}`);
				
		if (this.activeElement === null) {
			return;
		}

		this.activeElement.classList.add('active')

		if(amount === 5){
			setTimeout(() => {
				const resultMessage = document.querySelector('.result-message');
				if (resultMessage === null) {
					return;
				}
				resultMessage.classList.add('active')
			}, 500);
		}

	}
}

export default Hangman