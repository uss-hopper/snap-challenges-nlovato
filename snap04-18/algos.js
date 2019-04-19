/*
convert weight to grams
 */

function convertToGrams(weight, grams) {
	if (grams === 'lb'){
	return weight / 453.592;
	} else if (grams === 'oz') {
		return weight / 28.35;
	} else if (grams === 'kg') {
		return weight / 1000;
	} else if (grams ==='mg') {
		return weight * 1000;
	} else {
		return weight;
	}
}

/*
Find the sum of all unique positive factors of a number
 */

function sumUniquePositiveFactors(number) {
	sum = 0;

}
