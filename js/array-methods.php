<script>

/**
 * Array methods with examples and all
 * TODO: Clean up examples
 */

 const x  = ['ferrari', 'mclaren', 'bugatti', 'lamborghini', 'koenigsegg'];
 const y  = ['mercedes', 'audi'];
 const x2 = ['ferrari', 'mclaren'];
 const numbers = [10, 20, 30, 40, 50];
 const nestedArray = [10, 20, 30, [40, 50, [60, 70, [80, 90, 100]]]];

 // concat()	
 // Joins two or more arrays, and returns a copy of the joined arrays
 console.log(x.concat(y));

 // copyWithin()
 // Copies array elements within the array, to and from specified positions
 // !!! this changes the indexes in the array
 console.log(x.copyWithin(0, 1, 2));

 // entries()
 // Returns a key/value pair Array Iteration Object
 console.log(x.entries());

 // every()
 // tests whether all elements in the array pass the test implemented by the provided function
 function isBellowValue(currentValue) {
	 return currentValue < 60;
 }
 console.log(numbers.every(isBellowValue));

 // fill()
 // Fill the elements in an array with a static value
 console.log(x.fill('batman', 1, 2));

 // filter()
 // creates a new array with all elements that pass the test implemented by the provided function
 function passTest(filteredValue) {
	 return filteredValue > 30;
 }
 console.log(numbers.filter(passTest));

 // find()
 // Returns the value of the first element in an array that pass a test
 function findMercedes(element) {
	 return element == 'mclaren';
 }
 console.log(x.find(findMercedes));

 // findIndex()
 // Returns the index of the first element in the array that satisfies the provided testing function
 console.log(x.findIndex(function(element) { return element == 'mclaren' }));

 // flat()
 // Creates a new array with all sub-array elements concatenated into it recursively up to the specified depth
 // Flattens nested arrays
 console.log(nestedArray.flat(3));

 // flatMap()
 // First maps each element using a mapping function, then flattens the result into a new array
 console.log(nestedArray.flatMap(element => [element * 3]));

 // forEach()
 // Executes a provided function once for each array element
 x.forEach(function(element) { console.log(element); });

 // from()
 // Creates an array from an object
 // Arguments: (1) array, (2) mapping
 console.log(Array.from([1,2,3], element => element * 2));

 // includes()
 // determines whether an array includes a certain value among its entries
 // returns true or false
 console.log (x.includes('mclaren'));

 // indexOf()
 // Search the array for an element and returns its position
 console.log(x.indexOf('ferrari'));

 // join()
 // Creates and returns a new string by concatenating all of the elements in an array
 console.log(x.join(y));

 // keys()
 // Returns a Array Iteration Object, containing the keys of the original array
 console.log(x.keys());

 // lastIndexOf()
 // Returns the last index at which a given element can be found in the array
 console.log(numbers.lastIndexOf(20));

 // map()
 // Creates a new array with the results of calling a provided function on every element in the calling array
 console.log(x.map(element => element + ' test'));

 // pop()
 // Removes the last element from an array and returns that element
 console.log(x.pop());

 // push
 // adds one or more elements to the end of an array and returns the new length of the array
 console.log(x.push('mclaren'));

 // reduce()
 // Reduce the values of an array to a single value (going left-to-right)
 var ooo = [10, 10, 10, 10];
 console.log(ooo.reduce(element => element+1));

 // reduceRight()
 // Reduce the values of an array to a single value (going right-to-left)
 console.log(ooo.reduceRight(element => element+1));

 // reverse()
 // Reverses the order of the elements in an array
 console.log(x.reverse());

 // shift()
 // Removes the first element of an array, and returns that element
 console.log(x.shift());

 // slice()
 // Selects a part of an array, and returns the new array
 console.log(x.slice(2,4));

 // some()
 // Tests whether at least one element in the array passes the test
 console.log(x.some(currentValue => typeof currentValue == 'string'));

 // sort()
 // Sorts the elements of an array
 console.log(x.sort());

 // splice()
 // Adds/Removes elements from an array
 // params (position to add/remove, how many to replace, item1, item2..)
 console.log(x.splice(1, 10, 'booom'));

 // toLocaleString()
 var array1 = [1, 'test-stuff', new Date('21 Dec 1997 14:12:00 UTC')];
 var localeString = array1.toLocaleString('en', {timeZone: "UTC"});
 console.log(localeString);

 // toString()
 console.log(x.toString());

 // unshift()
 // Inserts the given values to the beginning of an array-like object
 // This method can be called or applied to objects resembling arrays
 // returns total count of items
 // params (value to add)
 console.log(numbers.unshift(0, 5));

 // values()
 // Returns a new Array Iterator object that contains the values for each index in the array
 var iterator = numbers.values();
 console.log(iterator.next().value);
 console.log(iterator.next().value);
 console.log(iterator.next().value);

 // @@iterator()
 // By default, using arr[Symbol.iterator] will return the values() function
 var arr = ['a', 'b', 'c', 'd', 'e'];
 var eArr = arr[Symbol.iterator]();
 console.log(typeof Symbol);
 
 
 
</script>