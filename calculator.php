
<FORM NAME="sci-calc">Jozi CBT Inbuilt Calculator
<TABLE CELLSPACING="0" CELLPADDING="1">
<TR>
<TD COLSPAN="5" ALIGN="center"><INPUT NAME="display" VALUE="0" SIZE="28" MAXLENGTH="25"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" exp " ONCLICK="if (checkNum(this.form.display.value)) { exp(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  7  " ONCLICK="addChar(this.form.display, '7')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  8  " ONCLICK="addChar(this.form.display, '8')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  9  " ONCLICK="addChar(this.form.display, '9')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   /   " ONCLICK="addChar(this.form.display, '/')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   ln   " ONCLICK="if (checkNum(this.form.display.value)) { ln(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  4  " ONCLICK="addChar(this.form.display, '4')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  5  " ONCLICK="addChar(this.form.display, '5')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  6  " ONCLICK="addChar(this.form.display, '6')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   *   " ONCLICK="addChar(this.form.display, '*')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sqrt " ONCLICK="if (checkNum(this.form.display.value)) { sqrt(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  1  " ONCLICK="addChar(this.form.display, '1')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  2  " ONCLICK="addChar(this.form.display, '2')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  3  " ONCLICK="addChar(this.form.display, '3')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   -   " ONCLICK="addChar(this.form.display, '-')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  sq  " ONCLICK="if (checkNum(this.form.display.value)) { square(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  0  " ONCLICK="addChar(this.form.display, '0')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   .  " ONCLICK="addChar(this.form.display, '.')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" +/- " ONCLICK="changeSign(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   +  " ONCLICK="addChar(this.form.display, '+')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="    (    " ONCLICK="addChar(this.form.display, '(')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="cos" ONCLICK="if (checkNum(this.form.display.value)) { cos(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sin" ONCLICK="if (checkNum(this.form.display.value)) { sin(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" tan" ONCLICK="if (checkNum(this.form.display.value)) { tan(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   )   " ONCLICK="addChar(this.form.display, ')')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="clear" ONCLICK="this.form.display.value = 0 "></TD>
<TD ALIGN="center" COLSPAN="3"><INPUT TYPE="button" VALUE="backspace" ONCLICK="deleteChar(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="enter" NAME="enter" ONCLICK="if (checkNum(this.form.display.value)) { compute(this.form) }"></TD>
</TR>
</TABLE><p align='center'>Powered by: Jozi Global Services - 08073047600</p>
</FORM>