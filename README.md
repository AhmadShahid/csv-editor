# CSV Sorter

Sort your CSV data with no hassle.

##What is it?
It is a simple utility developed using a mix of PHP and Javascript to help you sort the data in your CSV file.

##Why did you create it?
You can use it for whatever purpose you want but for me, I created it because it has occured to me a lot of times that I am given some excel and/or CSV files and I have to migrate the data to database. It sometimes become a really cumbersome job when I have to tackle the problems like having redundant data, with no order and there are chunks in separate files again with no order.

With this tool, it comparatively gets a lot more easier. What I do is simply provide the CSV to this little utility that I wrote and it generates a table out of the CSV. I click the headers to sort the data by however I want and voila! I have the data in whatever form I need.

## How to use it?

- Clone the repository or download the zip (whatever you prefer)
- Put the project wherever your server can access it
- Make sure that the `temp` directory has write permissions
- Point to the project in your browser and follow the steps in the below snapshot
![Step by Step Guide](http://i.imgur.com/0dL2qI1.png)

Or what you can do is navigate to this heroku app at [http://csv-sorter.herokuapp.com/](http://csv-sorter.herokuapp.com/) and do your processing there.

## Known Issues

- **Quality of Code** The quality of code is not perfect at all. I just sat and unleashed my hands to the keyboard so please ignore it and do not make any judgements based upon the code quality.
- **No validations or exception handling** There are no validations or exception handling stuff and it expects that happy path is followed.

