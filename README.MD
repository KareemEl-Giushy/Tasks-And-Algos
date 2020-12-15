# Sorting Algorithm

This algorithm is so simple. It just takes the first letter in the first element of an array and then compares it with every first letter in every element, if the letter is bigger it swaps with the next if not it stays as it is.
>Note: a < b < c < d  < …….
## Installation

Use PHP Command-line Server

```bash
php -S localhost:port;
```

## To clarify things:

```python
If I have [b, c, d, a];

First, I will take the first character in the array (b)

Second, I will compare it with the rest of the characters

b > c ? no
b > d ? no
b > a ? yes => swap =>[a, c, d, b];

And so on.... .

```

## {New!!} Capital Letters
we have a problem. If the input is a capital letter the process won’t work. So We need to convert it to lower case first before checking.


## License
[Kareem El-Giushy :)](https://github.com/KareemEl-Giushy)