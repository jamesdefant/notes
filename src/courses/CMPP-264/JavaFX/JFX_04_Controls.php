<?php

namespace J\ClassNotes {

  class JFX_04_Controls extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Controls
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Controls in JavaFX
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are a number of different controls available in <b>JavaFX 8</b>:</p>
<ul>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/button.htm#CJHEEACB" target="_blank">Button</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/checkbox.htm#CHDFEJCD" target="_blank">Checkbox</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/choice-box.htm#BCEDJAEH" target="_blank">ChoiceBox</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/color-picker.htm#BABHFGHA" target="_blank">ColorPicker</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/combo-box.htm#BABJCCIB" target="_blank">ComboBox</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/date-picker.htm#CCHHJBEA" target="_blank">DatePicker</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/editor.htm#CHDBEGDD" target="_blank">HTMLEditor</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/hyperlink.htm#CIHGADBG" target="_blank">Hyperlink</a> </li>
  <li>ImageView</li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/label.htm#CIHHFIBJ" target="_blank">Label</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/list-view.htm#CEGGEDBF" target="_blank">ListView</a> </li>
  <li>MediaView</li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/menu_controls.htm#BABGHADI" target="_blank">MenuBar</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/menu_controls.htm#BABGHADI" target="_blank">MenuButton</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/pagination.htm#CACJCAGB" target="_blank">Pagination</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/password-field.htm#CHDIAAAJ" target="_blank">PasswordField</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/progress.htm#CHDDJAJE" target="_blank">ProgressBar & ProgressIndicator</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/radio-button.htm#BABBJBDA" target="_blank">RadioButton</a> </li>
  <li><A href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/scrollbar.htm#BGBEGJDE" target="_blank">ScrollBar</A> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/separator.htm#BGBCFDFI" target="_blank">Seperator</a> </li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/slider.htm#CCHFBJCH" target="_blank">Slider</a> </li>
  <li>Spinner</li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/menu_controls.htm#BABGHADI" target="_blank">SplitMenuButton</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/table-view.htm#CJAGAAEE" target="_blank">TableColumn</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/table-view.htm#CJAGAAEE" target="_blank">TableView</a></li>
  <li>TextArea</li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/text-field.htm#BABBCEIG" target="_blank">TextField</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/toggle-button.htm#CACJDICF" target="_blank">ToggleButton</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/tree-table-view.htm#CJAFBAEG" target="_blank">TreeTableColumn</a></li>
  <li><a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/tree-view.htm#BABDEADA" target="_blank">TreeView</a></li>
  <li>WebView</li>
</ul>



';

      return $returnValue;
    }

  }
}