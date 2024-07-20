import { filters } from "./modules/filters";
import Hangman from "./modules/hangman";
import { selection } from "./modules/selection";


filters('.filter');
selection('.question');

const hangman = new Hangman('.hangman')
hangman.updateHangman(5)