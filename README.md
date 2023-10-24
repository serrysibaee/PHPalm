# PHPalm
#### This is a simple project to make the connection between PHP and google cloud PALM service easier with objects

## Note
Until now this project is only for text generating but anyone can extend it for other services 

# Usage
1. clone this repo. or just download the `PHPalm.php` file
2. move the file for your project path
3. require the file in your code
```PHP
require_once 'PHPalm.php';
 ```
4. use the `Llmer` object (example) [Link for the API](https://developers.generativeai.google/tutorials/setup))
```PHP
<?php
$suggester = new Llmer("YOUR_API_KEY");
$prompt = "your prompt for the LLM";
$response = $suggester->get_response($prompt);
echo("<h5> $response </h5>");  
 ```

### small note
you can make your prompts more effective by adding variables in the context for more flexibility 
```PHP
<?php
$suggester = new Llmer("YOUR_API_KEY");
$topic = "cars";
$number = 5;
$prompt = "write me a story about $topic with at least $number lines";
$response = $suggester->get_response($prompt);
echo("<h5> $response </h5>");  
 ```

