# Sample streamed data
This command line application stream sampler that receives and processes an input stream consisting of single characters.

 The stream is of unknown and possibly very large length and the program should work regardless of the size of the input.

 ### Used PHP 7, composer, phpunit

     The program should take the sample size as a parameter and generate a random representative
     sample using that many characters.
     As for receiving the data the tool should work with two kinds of inputs:
     values piped directly into the process using
 ### How to run

     cat input.txt | php stream-sampler.php 5

     values generated by using a random source from within the language.
     Clean and maintainable code, efficiency, memory consumption, and good testing are all important
     Example
     Given a sample size of 5 and the following stream of characters as values:

```Given a sample size of 5 and the following stream of characters as values:
   THEQUICKBROWNFOXJUMPSOVERTHELAZYDOG

   A possible random sample could be:
   EMETN

   Example execution and output for piped processing:
   $ dd if=/dev/urandom count=100 bs=1MB | base64 | stream-sampler 5
   Random Sample: EMETN
```
### How to install

Keep this folder into your document root or make a virtual host.
Run the composer install

### How to test

Run phpunit

#### Guess
You will input a text file with continious character string.
Otherwise you do not pipe any file. Application automatically prepare the automatic work from a-z alphabet. Size parameter always be there.

#### This is PSR 2 standard code.