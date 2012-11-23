# Program to print a file with a header and footer.

BEGIN { print "Beginning of file";
    print "-----------------" }

    { print "Field 1: " $1, "Field 3: "$3, "Field 7: "$7}

END { print "------------------";
    print "End of file."}
