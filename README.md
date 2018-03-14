# Claromentis PHP Developer Test

It was test task for[Claromentis](https://www.claromentis.com).

The task is to run some calculations and display result based on data from an uploaded CSV file. CSV stands for comma separated values – format supported by Excel or any other spreadsheets software.
The source data is an imaginary expenses report and the goal of the programme is to display total cost per expense category.
Once the summary data has been calculated and displayed, it should be possible to generate and download a CSV file with the same data as displayed in the table.
Example page layout is shown on the screenshot.
![Interface](/images/interface.png?raw=true "Screenshot")

**File format**: the expected source file does not have any headers, and contain the following three columns:
- **category**. String. May be one of a few values, not defined in advance (the set of available values can be different in different CSV files)
- **price**. Numeric. Cost per item
- **amount**. Numeric. Number of items

![Excel](/images/excel_example.png?raw=true "Excel")
![Plain](/images/plain_text.png?raw=true "Plain")

The resulting pages should be fully valid XHTML or HTML5.
Do not use any frameworks for the application. It's fine to use 3rd party libraries, if needed.
Please send the result as an archive with all required files, maintaining the folder structure. Please include a instructions at the root of the archive.
## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Demo

[Comic Talk](http://caloremntisdevtest.ddns.net)
```
l:demo
p:demo 
```

### Prerequisites

What things you need to install the software and how to install them

```
* web server(nginx, apache)
* php5/7
```

### Installing

```
* move index.php into webserver root directory
```


## Built With

* vanilla PHP


## Authors

* **Dmitrij Rebrov** - *Initial work* - [Aliaric](https://github.com/Aliaric)

